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
        'object_image' => [
            'vname' => 'LBL_OBJECT_IMAGE',
            'widget_class' => 'SubPanelIcon',
            'width' => '2%',
        ],
        'name' => [
            'vname' => 'LBL_LIST_SUBJECT',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '30%',
        ],
        'sms_type' => [
            'widget_class' => 'SubPanelActivitiesStatusField',
            'vname' => 'LBL_LIST_STATUS',
            'width' => '15%',
        ],
        'contact_name' => [
            'widget_class' => 'SubPanelDetailViewLink',
            'target_record_key' => 'parent_id',
            'target_module' => 'Contacts',
            'module' => 'Contacts',
            'vname' => 'LBL_LIST_CONTACT',
            'width' => '11%',
            'sortable' => false,
        ],
        'parent_id' => [
            'usage' => 'query_only',
            'force_exists' => true
        ],
        'parent_type' => [
            'usage' => 'query_only',
            'force_exists' => true
        ],

        'date_modified' => [
            'vname' => 'LBL_LIST_DATE_MODIFIED',
            'width' => '10%',
        ],
        'date_entered' => [
            'vname' => 'LBL_LIST_DATE_ENTERED',
            'width' => '10%',
        ],
        'assigned_user_name' => [
            'name' => 'assigned_user_name',
            'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'target_record_key' => 'assigned_user_id',
            'target_module' => 'Employees',
            'width' => '10%',
        ],
            'edit_button' => [
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'width' => '2%',
        ],
            'remove_button' => [
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'width' => '2%',
        ],
    )
);
