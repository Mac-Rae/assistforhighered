<?php
function pre_install()
{
    $cfg = new Configurator();
    $cfg->config['addAjaxBannedModules'][] = 'SA_ContactCenters';
    $cfg->saveConfig();
}