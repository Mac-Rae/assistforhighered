<?php
function pre_install()
{
    $cfg = new Configurator();
    echo "Setting up config";
    $cfg->config['SAAudits']['module_blacklist'] = [
        'EmailAddresses',
        'AOD_IndexEvent',
        'UserPreferences',
        'ACLActions'
    ];
    $cfg->saveConfig();
}