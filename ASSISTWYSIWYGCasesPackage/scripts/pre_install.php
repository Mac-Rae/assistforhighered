<?php
function pre_install()
{
    global $db;
    $cfg = new Configurator();
    $cfg->config['addAjaxBannedModules'][] = 'AOK_KnowledgeBase';
    $cfg->config['addAjaxBannedModules'][] = 'Cases';
    $cfg->saveConfig();
    $db->query("UPDATE schedulers SET job = 'function::ASSISTPollMonitoredInboxes' WHERE job = 'function::pollMonitoredInboxesAOP'");

}
