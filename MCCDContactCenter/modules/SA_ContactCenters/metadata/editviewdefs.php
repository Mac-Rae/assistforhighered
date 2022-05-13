<?php
$module_name = 'SA_ContactCenters';
$viewdefs [$module_name] =
    array (
        'EditView' =>
            array (
                'templateMeta' =>
                    array (
                        'form' =>
                            array (
                                'hidden' =>
                                    array (
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
                        'tabDefs' =>
                            array (
                                'DEFAULT' =>
                                    array (
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'useTabs' => false,
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
                                    0 => 'check_connection',
                                    1 => 'queues',
                                ),
                                5 => array(
                                    0 => array(
                                        'name' => 'banner_colour',
                                        'customCode' => '<input type="color" name="banner_colour" id="banner_colour" size="30" value="{$fields.banner_colour.value}" title="">'
                                    ),
                                    1 => array(
                                        'name' => 'banner_text_colour',
                                        'customCode' => '<input type="color" name="banner_text_colour" id="banner_text_colour" size="30" value="{$fields.banner_text_colour.value}" title="">'
                                    ),
                                ),
                                6 => array(
                                    0 => array(
                                        'name' => 'button_colour',
                                        'customCode' => '<input type="color" name="button_colour" id="button_colour" size="30" value="{$fields.button_colour.value}" title="">'
                                    ),
                                    1 => array(
                                        'name' => 'button_hover_colour',
                                        'customCode' => '<input type="color" name="button_hover_colour" id="button_hover_colour" size="30" value="{$fields.button_hover_colour.value}" title="">'
                                    ),
                                ),
                                7 => array(
                                    0 => array(
                                        'name' => 'button_text_colour',
                                        'customCode' => '<input type="color" name="button_text_colour" id="button_text_colour" size="30" value="{$fields.button_text_colour.value}" title="">'
                                    ),
                                ),
                            ),
                    ),
            ),
    );
;
?>
