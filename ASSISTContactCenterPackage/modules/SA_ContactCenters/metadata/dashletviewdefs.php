<?php
$dashletData['SA_ContactCentersDashlet']['searchFields'] = array(
    'name' => array(
        'default' => ''
    ),
    'description' => array(
        'default' => ''
    ),
    'date_entered' => array(
        'default' => ''
    ),
    'date_modified' => array(
        'default' => ''
    ),
    'modified_by_name' => array(
        'default' => ''
    )
);
$dashletData['SA_ContactCentersDashlet']['columns'] = array(
    'name' => array(
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true
    ),
    'assigned_user_name' => array(
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true
    ),
    'date_modified' => array(
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true
    )
);
