<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_AthenaSyncLogsDashlet'] = array(
    'module' => 'SA_AthenaSyncLogs',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_AthenaSyncLogs'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);