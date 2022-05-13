<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_ContactCenterCallsDashlet'] = array(
    'module' => 'SA_ContactCenterCalls',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_ContactCenterCalls'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);