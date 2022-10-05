<?php
$dictionary['SA_PublicProfile'] = array(
    'table' => 'sa_publicprofile',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'enable' => array(
            'name' => 'enable',
            'vname' => 'LBL_ENABLE',
            'type' => 'bool',
        ),
        'first_name' => array(
            'name' => 'first_name',
            'vname' => 'LBL_FIRST_NAME',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'last_name' => array(
            'name' => 'last_name',
            'vname' => 'LBL_LAST_NAME',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'institution_id' => array(
            'name' => 'institution_id',
            'vname' => 'LBL_INSTITUTION_ID',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'email_address' => array(
            'name' => 'email_address',
            'vname' => 'LBL_EMAIL_ADDRESS',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'department' => array(
            'name' => 'department',
            'vname' => 'LBL_DEPARTMENT',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'biography' => array(
            'name' => 'biography',
            'vname' => 'LBL_BIOGRAPHY',
            'type' => 'text',
            'rows' => 6,
            'cols' => 80,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'false',
            'inline_edit' => true
        ),


        'business_days' => array(
            'name' => 'business_days',
            'vname' => 'LBL_BUSINESS_DAYS',
            'type' => 'multienum',
            'options' => 'sa_publicprofile_business_days_dom',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'inline_edit' => true,
            'isMultiSelect' => true
        ),


        'meeting_hours_start_minutes' => array(
            'name' => 'meeting_hours_start_minutes',
            'vname' => 'LBL_MEETING_HOURS_START_MINUTES',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'meeting_hours_start_hours' => array(
            'name' => 'meeting_hours_start_hours',
            'vname' => 'LBL_MEETING_HOURS_START_HOURS',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'meeting_hours_end_minutes' => array(
            'name' => 'meeting_hours_end_minutes',
            'vname' => 'LBL_MEETING_HOURS_END_MINUTES',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'meeting_hours_end_hours' => array(
            'name' => 'meeting_hours_end_hours',
            'vname' => 'LBL_MEETING_HOURS_END_HOURS',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'meeting_days' => array(
            'name' => 'meeting_days',
            'vname' => 'LBL_MEETING_DAYS',
            'type' => 'multienum',
            'options' => 'sa_publicprofile_meeting_days_dom',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'inline_edit' => true,
            'isMultiSelect' => true
        ),

        'meeting_length' => array(
            'name' => 'meeting_length',
            'vname' => 'LBL_MEETING_LENGTH',
            'type' => 'int',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'inline_edit' => true
        ),

        'business_hours_start_minutes' => array(
            'name' => 'business_hours_start_minutes',
            'vname' => 'LBL_BUSINESS_HOURS_START_MINUTES',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'business_hours_start_hours' => array(
            'name' => 'business_hours_start_hours',
            'vname' => 'LBL_BUSINESS_HOURS_START_HOURS',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'business_hours_end_minutes' => array(
            'name' => 'business_hours_end_minutes',
            'vname' => 'LBL_BUSINESS_HOURS_END_MINUTES',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'business_hours_end_hours' => array(
            'name' => 'business_hours_end_hours',
            'vname' => 'LBL_BUSINESS_HOURS_END_HOURS',
            'type' => 'int',
            'len' => 10,
            'disable_num_format' => true,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'linkedin' => array(
            'name' => 'linkedin',
            'vname' => 'LBL_LINKEDIN',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'live_chat' => array(
            'name' => 'live_chat',
            'vname' => 'LBL_LIVE_CHAT',
            'type' => 'text',
            'rows' => 6,
            'cols' => 80,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'false',
            'inline_edit' => true
        ),


        'webex' => array(
            'name' => 'webex',
            'vname' => 'LBL_WEBEX',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'twitter' => array(
            'name' => 'twitter',
            'vname' => 'LBL_TWITTER',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'title' => array(
            'name' => 'title',
            'vname' => 'LBL_TITLE',
            'type' => 'varchar',
            'len' => 255,
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'out_of_office_start' => array(
            'name' => 'out_of_office_start',
            'vname' => 'LBL_OUT_OF_OFFICE_START',
            'type' => 'date',
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'out_of_office_end' => array(
            'name' => 'out_of_office_end',
            'vname' => 'LBL_OUT_OF_OFFICE_END',
            'type' => 'date',
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),

        'show_biography' => array(
            'name' => 'show_biography',
            'vname' => 'LBL_SHOW_BIOGRAPHY',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'show_out_of_office' => array(
            'name' => 'show_out_of_office',
            'vname' => 'LBL_SHOW_OUT_OF_OFFICE',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_business_days' => array(
            'name' => 'show_business_days',
            'vname' => 'LBL_SHOW_BUSINESS_DAYS',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_business_hours_end' => array(
            'name' => 'show_business_hours_end',
            'vname' => 'LBL_SHOW_BUSINESS_HOURS_END',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),

        'show_business_hours_start' => array(
            'name' => 'show_business_hours_start',
            'vname' => 'LBL_SHOW_BUSINESS_HOURS_START',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),



        'show_department' => array(
            'name' => 'show_department',
            'vname' => 'LBL_SHOW_DEPARTMENT',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_email_address' => array(
            'name' => 'show_email_address',
            'vname' => 'LBL_SHOW_EMAIL_ADDRESS',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_first_name' => array(
            'name' => 'show_first_name',
            'vname' => 'LBL_SHOW_FIRST_NAME',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_institution' => array(
            'name' => 'show_institution',
            'vname' => 'LBL_SHOW_INSTITUTION_ID',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_last_name' => array(
            'name' => 'show_last_name',
            'vname' => 'LBL_SHOW_LAST_NAME',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_linkedin' => array(
            'name' => 'show_linkedin',
            'vname' => 'LBL_SHOW_LINKEDIN',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_live_chat' => array(
            'name' => 'show_live_chat',
            'vname' => 'LBL_SHOW_LIVE_CHAT',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_meeting_days' => array(
            'name' => 'show_meeting_days',
            'vname' => 'LBL_SHOW_MEETING_DAYS',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_meeting_hours_end' => array(
            'name' => 'show_meeting_hours_end',
            'vname' => 'LBL_SHOW_MEETING_HOURS_END',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_meeting_hours_start' => array(
            'name' => 'show_meeting_hours_start',
            'vname' => 'LBL_SHOW_MEETING_HOURS_START',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),




        'show_title' => array(
            'name' => 'show_title',
            'vname' => 'LBL_SHOW_TITLE',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_twitter' => array(
            'name' => 'show_twitter',
            'vname' => 'LBL_SHOW_TWITTER',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),


        'show_webex' => array(
            'name' => 'show_webex',
            'vname' => 'LBL_SHOW_WEBEX',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'show_photo' => array(
            'name' => 'show_photo',
            'vname' => 'LBL_SHOW_PHOTO',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'photo_name' => array(
            'name' => 'photo_name',
            'vname' => 'LBL_PHOTO_NAME',
            'type' => 'varchar',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'photo_mime' => array(
            'name' => 'photo_mime',
            'vname' => 'LBL_PHOTO_MIME',
            'type' => 'varchar',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),

        'use_vanity' => array(
            'name' => 'use_vanity',
            'vname' => 'LBL_USE_VANITY',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'vanity_url' => array(
            'name' => 'vanity_url',
            'vname' => 'LBL_VANITY_URL',
            'type' => 'varchar',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'show_meeting_in_person' => array(
            'name' => 'show_meeting_in_person',
            'vname' => 'LBL_SHOW_MEETING_IN_PERSON',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'show_meeting_phone_call' => array(
            'name' => 'show_meeting_phone_call',
            'vname' => 'LBL_SHOW_MEETING_PHONE_CALL',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'show_meeting_virtual' => array(
            'name' => 'show_meeting_virtual',
            'vname' => 'LBL_SHOW_MEETING_VIRTUAL',
            'type' => 'bool',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'meeting_in_person' => array(
            'name' => 'meeting_in_person',
            'vname' => 'LBL_MEETING_IN_PERSON',
            'type' => 'text',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'meeting_in_person_days' => array(
            'name' => 'meeting_in_person_days',
            'vname' => 'LBL_MEETING_IN_PERSON_DAYS',
            'type' => 'multienum',
            'options' => 'sa_publicprofile_business_days_dom',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'inline_edit' => true,
            'isMultiSelect' => true
        ),
        'meeting_phone_call' => array(
            'name' => 'meeting_phone_call',
            'vname' => 'LBL_MEETING_PHONE_CALL',
            'type' => 'varchar',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'meeting_phone_call_days' => array(
            'name' => 'meeting_phone_call_days',
            'vname' => 'LBL_MEETING_PHONE_CALL_DAYS',
            'type' => 'multienum',
            'options' => 'sa_publicprofile_business_days_dom',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'inline_edit' => true,
            'isMultiSelect' => true
        ),
        'meeting_virtual' => array(
            'name' => 'meeting_virtual',
            'vname' => 'LBL_MEETING_VIRTUAL',
            'type' => 'varchar',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => false,
            'duplicate_merge' => 'true',
            'inline_edit' => true
        ),
        'meeting_virtual_days' => array(
            'name' => 'meeting_virtual_days',
            'vname' => 'LBL_MEETING_VIRTUAL_DAYS',
            'type' => 'multienum',
            'options' => 'sa_publicprofile_business_days_dom',
            'required' => false,
            'audited' => true,
            'reportable' => true,
            'importable' => true,
            'unified_search' => true,
            'inline_edit' => true,
            'isMultiSelect' => true
        ),

    ),
    'indices' => array(),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true
);
if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('SA_PublicProfile', 'SA_PublicProfile', array(
    'basic',
    'assignable',
    'security_groups'
));
