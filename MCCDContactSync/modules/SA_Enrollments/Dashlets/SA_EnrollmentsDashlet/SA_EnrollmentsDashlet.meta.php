<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['SA_EnrollmentsDashlet'] = array(
    'module' => 'SA_Enrollments',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'SA_Enrollments'),
    'description' => 'A customizable view into',
    'category' => 'Module Views'
);