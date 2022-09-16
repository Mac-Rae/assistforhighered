<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_SMSTemplateDashlet'] = array(
    'module' => 'SA_SMSTemplate',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_SMSTemplate'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);