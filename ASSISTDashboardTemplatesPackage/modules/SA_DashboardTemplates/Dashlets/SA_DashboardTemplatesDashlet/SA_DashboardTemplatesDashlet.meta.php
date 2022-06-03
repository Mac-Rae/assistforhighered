<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_DashboardTemplatesDashlet'] = array(
    'module' => 'SA_DashboardTemplates',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_DashboardTemplates'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);