<?php
$module_name = 'SA_ContactCenters';
$viewdefs [$module_name] =
    array (
        'DetailView' =>
            array (
                'templateMeta' =>
                    array (
                        'form' =>
                            array (
                                'buttons' =>
                                    array (
                                        0 => 'EDIT',
                                        1 => 'DUPLICATE',
                                        2 => 'DELETE',
                                        3 => 'FIND_DUPLICATES',
                                    ),
                            ),
                        'maxColumns' => '2',
                        'widths' =>
                            array (
                                0 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'useTabs' => true,
                        'tabDefs' =>
                            array (
                                'DEFAULT' =>
                                    array (
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_PANEL_ASSIGNMENT' =>
                                    array (
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'includes' =>
                            array (
                            ),
                    ),
                'panels' =>
                    array (
                        'default' =>
                            array (
                                0 =>
                                    array (
                                        0 => 'name',
                                        1 => 'assigned_user_name',
                                    ),
                                1 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'sso_login_url',
                                                'label' => 'LBL_SSO_LOGIN_URL',
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array (
                                        0 => 'description',
                                    ),
                                3 =>
                                    array (
                                        0 => 'instance_id',
                                        1 => 'instance_region',
                                    ),
                                4 => array(
                                    0 => 'queues',
                                ),
                                5 => array(
                                    0 => 'display_stats',
                                ),
                                6 => array(
                                    0 => array(
                                        'name' => 'banner_colour',
                                        'customCode' => '{$fields.banner_colour.value} <span style="width:25px;background-color: {$fields.banner_colour.value};">&nbsp;&nbsp;</span>'
                                    ),
                                    1 => array(
                                        'name' => 'banner_text_colour',
                                        'customCode' => '{$fields.banner_text_colour.value} <span style="width:25px;background-color: {$fields.banner_text_colour.value};">&nbsp;&nbsp;</span>'
                                    ),
                                ),
                                7 => array(
                                    0 => array(
                                        'name' => 'button_colour',
                                        'customCode' => '{$fields.button_colour.value} <span style="width:25px;background-color: {$fields.button_colour.value};">&nbsp;&nbsp;</span>'
                                    ),
                                    1 => array(
                                        'name' => 'button_hover_colour',
                                        'customCode' => '{$fields.button_hover_colour.value} <span style="width:25px;background-color: {$fields.button_hover_colour.value};">&nbsp;&nbsp;</span>'
                                    ),
                                ),
                                8 => array(
                                    0 => array(
                                        'name' => 'button_text_colour',
                                        'customCode' => '{$fields.button_text_colour.value} <span style="width:25px;background-color: {$fields.button_text_colour.value};">&nbsp;&nbsp;</span>'
                                    ),
                                ),
                            ),
                        'LBL_PANEL_ASSIGNMENT' =>
                            array (
                                0 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'date_entered',
                                                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                                                'label' => 'LBL_DATE_ENTERED',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'date_modified',
                                                'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                                                'label' => 'LBL_DATE_MODIFIED',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
;
?>
