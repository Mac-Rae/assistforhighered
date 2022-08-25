<?php
$job_strings[] = 'ASSISTPollMonitoredInboxes';

use SuiteCRM\Utility\SuiteValidator;

function ASSISTPollMonitoredInboxes()
{
    require_once 'modules/InboundEmail/AOPInboundEmail.php';
    $GLOBALS['log']->info('----->Scheduler fired job of type pollMonitoredInboxesAOP()');
    global $dictionary;
    global $app_strings;
    global $sugar_config;

    require_once('modules/Configurator/Configurator.php');
    $aopInboundEmail = new AOPInboundEmail();

    $sqlQueryResult = $aopInboundEmail->db->query(
        'SELECT id, name FROM inbound_email WHERE is_personal = 0 AND deleted=0 AND status=\'Active\'' .
        ' AND mailbox_type != \'bounce\''
    );

    $GLOBALS['log']->debug('Just got Result from get all Inbounds of Inbound Emails');

    while ($inboundEmailRow = $aopInboundEmail->db->fetchByAssoc($sqlQueryResult)) {
        $GLOBALS['log']->debug('In while loop of Inbound Emails');

        $aopInboundEmailX = new AOPInboundEmail();

        if (!$aopInboundEmailX->retrieve($inboundEmailRow['id']) || !$aopInboundEmailX->id) {
            throw new Exception('Error retrieving AOP Inbound Email: ' . $inboundEmailRow['id']);
        }

        $mailboxes = $aopInboundEmailX->mailboxarray;

        foreach ($mailboxes as $mbox) {
            $aopInboundEmailX->mailbox = $mbox;
            $newMsgs = array();
            $msgNoToUIDL = array();
            $connectToMailServer = false;

            if ($aopInboundEmailX->isPop3Protocol()) {
                $msgNoToUIDL = $aopInboundEmailX->getPop3NewMessagesToDownloadForCron();
                // get all the keys which are msgnos;
                $newMsgs = array_keys($msgNoToUIDL);
            }

            if ($aopInboundEmailX->connectMailserver() == 'true') {
                $connectToMailServer = true;
            } // if

            $GLOBALS['log']->debug('Trying to connect to mailserver for [ ' . $inboundEmailRow['name'] . ' ]');
            if ($connectToMailServer) {
                $GLOBALS['log']->debug('Connected to mailserver');

                if (!$aopInboundEmailX->isPop3Protocol()) {
                    $newMsgs = $aopInboundEmailX->getNewMessageIds();
                }

                if (is_array($newMsgs)) {
                    $current = 1;
                    $total = count($newMsgs);
                    require_once("include/SugarFolders/SugarFolders.php");
                    $sugarFolder = new SugarFolder();
                    $groupFolderId = $aopInboundEmailX->groupfolder_id;
                    $isGroupFolderExists = false;
                    $users = array();
                    if ($groupFolderId != null && $groupFolderId != "") {
                        $sugarFolder->retrieve($groupFolderId);
                        $isGroupFolderExists = true;
                    } // if
                    $messagesToDelete = array();
                    if ($aopInboundEmailX->isMailBoxTypeCreateCase()) {
                        require_once 'modules/AOP_Case_Updates/AOPAssignManager.php';
                        $assignManager = new AOPAssignManager($aopInboundEmailX);
                    }
                    foreach ($newMsgs as $k => $msgNo) {
                        $uid = $msgNo;
                        if ($aopInboundEmailX->isPop3Protocol()) {
                            $uid = $msgNoToUIDL[$msgNo];
                        } else {
                            $uid = $aopInboundEmailX->getImap()->getUid($msgNo);
                        } // else
                        if ($isGroupFolderExists) {
                            $emailId = $aopInboundEmailX->returnImportedEmail($msgNo, $uid, false, true, $isGroupFolderExists);

                            if (!empty($emailId)) {
                                // add to folder

                                $sugarFolder->addBean($aopInboundEmailX);
                                if ($aopInboundEmailX->isPop3Protocol()) {
                                    $messagesToDelete[] = $msgNo;
                                } else {
                                    $messagesToDelete[] = $uid;
                                }
                                if ($aopInboundEmailX->isMailBoxTypeCreateCase()) {
                                    $userId = $assignManager->getNextAssignedUser();
                                    $GLOBALS['log']->debug('userId [ ' . $userId . ' ]');
                                    $validatior = new SuiteValidator();
                                    if ((!isset($aopInboundEmailX->email) || !$aopInboundEmailX->email ||
                                            !isset($aopInboundEmailX->email->id) || !$aopInboundEmailX->email->id) &&
                                        $validatior->isValidId($emailId)
                                    ) {
                                        $aopInboundEmailX->email = BeanFactory::newBean('Emails');
                                        if (!$aopInboundEmailX->email->retrieve($emailId)) {
                                            throw new Exception('Email retrieving error to handle case create, email id was: ' . $emailId);
                                        }
                                    }
                                    if(strpos($aopInboundEmailX->email->name,'Delivery Status Notification') !== 0){
                                        $aopInboundEmailX->handleCreateCase($aopInboundEmailX->email, $userId);
                                    }

                                } // if
                            } // if
                        } else {
                            if ($aopInboundEmailX->isAutoImport()) {
                                $aopInboundEmailX->returnImportedEmail($msgNo, $uid);
                            } else {
                                /*If the group folder doesn't exist then download only those messages
                                 which has caseid in message*/

                                $aopInboundEmailX->getMessagesInEmailCache($msgNo, $uid);
                                $email = BeanFactory::newBean('Emails');
                                $header = $aopInboundEmailX->getImap()->getHeaderInfo($msgNo);
                                $email->name = $aopInboundEmailX->handleMimeHeaderDecode($header->subject);
                                $email->from_addr = $aopInboundEmailX->convertImapToSugarEmailAddress($header->from);
                                isValidEmailAddress($email->from_addr);
                                $email->reply_to_email = $aopInboundEmailX->convertImapToSugarEmailAddress($header->reply_to);
                                if (!empty($email->reply_to_email)) {
                                    $contactAddr = $email->reply_to_email;
                                    isValidEmailAddress($contactAddr);
                                } else {
                                    $contactAddr = $email->from_addr;
                                    isValidEmailAddress($contactAddr);
                                }
                                $mailBoxType = $aopInboundEmailX->mailbox_type;
                                $aopInboundEmailX->handleAutoresponse($email, $contactAddr);
                            } // else
                        } // else
                        $GLOBALS['log']->debug('***** On message [ ' . $current . ' of ' . $total . ' ] *****');
                        $current++;
                    } // foreach
                    // update Inbound Account with last robin
                } // if

                if (!empty($isGroupFolderExists)) {
                    $leaveMessagesOnMailServer = $aopInboundEmailX->get_stored_options("leaveMessagesOnMailServer", 0);
                    if (!$leaveMessagesOnMailServer) {
                        if ($aopInboundEmailX->isPop3Protocol()) {
                            $aopInboundEmailX->deleteMessageOnMailServerForPop3(implode(",", $messagesToDelete));
                        } else {
                            $aopInboundEmailX->deleteMessageOnMailServer(implode($app_strings['LBL_EMAIL_DELIMITER'], $messagesToDelete));
                        }
                    }
                }
            } else {
                $GLOBALS['log']->fatal("SCHEDULERS: could not get an IMAP connection resource for ID [ {$inboundEmailRow['id']} ]. Skipping mailbox [ {$inboundEmailRow['name']} ].");
                // cn: bug 9171 - continue while
            } // else
        } // foreach
        $aopInboundEmailX->getImap()->expunge();
        $aopInboundEmailX->getImap()->close(CL_EXPUNGE);
    } // while
    return true;
}