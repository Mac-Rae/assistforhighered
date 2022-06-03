<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_AuditsDashlet'] = array(
    'module' => 'SA_Audits',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_Audits'),
    'description' => 'A customizable view into ',
    'category' => 'Module Views'
);