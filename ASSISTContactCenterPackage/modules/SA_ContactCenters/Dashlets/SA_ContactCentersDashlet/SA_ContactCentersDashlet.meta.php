<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_ContactCentersDashlet'] = array(
    'module' => 'SA_ContactCenters',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_ContactCenters'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);