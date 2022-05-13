<?php
$module_name = 'SA_ContactCenters';
$viewdefs[$module_name] = array(
    'QuickCreate' => array(
        'templateMeta' => array(
            'maxColumns' => '2',
            'widths' => array(
                array(
                    'label' => '10',
                    'field' => '30'
                ),
                array(
                    'label' => '10',
                    'field' => '30'
                )
            ),
            'useTabs' => false,
            'tabDefs' => array(
                'DEFAULT' => array(
                    'newTab' => false,
                    'panelDefault' => 'expanded'
                )
            )
        ),
        'panels' => array(
            'default' => array(
                array(
                    'name'
                ),
                array(
                    'description'
                )
            )
        )
    )
);
