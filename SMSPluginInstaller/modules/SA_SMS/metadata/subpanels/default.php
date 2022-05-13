<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'SA_SMS';
$subpanel_layout = array(
    'top_buttons' => array(
        array(
            'widget_class' => 'SubPanelTopCreateButton'
        ),
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'popup_module' => $module_name
        )
    ),
    
    'where' => '',
    
    'list_fields' => array(
        'name' => array(
            'vname' => 'LBL_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%'
        ),
        'assigned_user_name' => array(
            'vname' => 'LBL_ASSIGNED_TO_NAME',
            'width' => '15%'
        ),
        'date_modified' => array(
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '15%'
        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '4%'
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '5%'
        )
    )
);
