<?php
$module_name = 'SA_ContactCenterCalls';
$viewdefs[$module_name] = array(
    'EditView' => array(
        'templateMeta' => array(
            'form' => array(
                'hidden' => array()
            ),
            'maxColumns' => '2',
            'widths' => array(
                0 => array(
                    'label' => '10',
                    'field' => '30'
                ),
                1 => array(
                    'label' => '10',
                    'field' => '30'
                )
            ),
            'tabDefs' => array(
                'DEFAULT' => array(
                    'newTab' => false,
                    'panelDefault' => 'expanded'
                )
            ),
            'useTabs' => false,
            'includes' => array()
        ),
        'panels' => array(
            'default' => array(
                array(
                    'name',
                    'assigned_user_name'
                ),
                array(
                    'description'
                )
            )
        )
    )
);
