<?php
if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'SA_Enrollments';
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
        'emplid' => array(
            'vname' => 'LBL_EMPLID',
            'width' => '15%'
        ),
        'start_date' => array(
            'vname' => 'LBL_START_DATE',
            'width' => '15%'
        ),
        'end_date' => array(
            'vname' => 'LBL_END_DATE',
            'width' => '15%'
        ),
        'course' => array(
            'vname' => 'LBL_COURSE',
            'width' => '15%'
        ),
        'grade' => array(
            'vname' => 'LBL_GRADE',
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