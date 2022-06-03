<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_SMSDashlet'] = array(
    'module' => 'SA_SMS',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_SMS'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);