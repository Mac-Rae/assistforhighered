<?php
function pre_install()
{
    $cfg = new Configurator();
    $cfg->config['addAjaxBannedModules'][] = 'AOK_KnowledgeBase';
    $cfg->config['addAjaxBannedModules'][] = 'Cases';
    $cfg->saveConfig();
}
