<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_ProgramsDashlet'] = array(
    'module' => 'SA_Programs',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_Programs'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);