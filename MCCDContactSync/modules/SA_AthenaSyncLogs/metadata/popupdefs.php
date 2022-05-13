<?php
$popupMeta = array(
    'moduleMain' => 'SA_AthenaSyncLogs',
    'varName' => 'SA_AthenaSyncLogs',
    'orderBy' => 'sa_athenasynclogs.name',
    'whereClauses' => array(
        'name' => 'sa_athenasynclogs.name',
        'assigned_user_name' => 'sa_athenasynclogs.assigned_user_name',
        0 => 'sa_athenasynclogs.0'
    ),
    'searchInputs' => array(
        0 => 'name',
        7 => 'assigned_user_name'
    ),
    'listviewdefs' => array(
        'NAME' => array(
            'type' => 'name',
            'link' => true,
            'label' => 'LBL_NAME',
            'width' => '10%',
            'default' => true
        ),
        'ASSIGNED_USER_NAME' => array(
            'link' => true,
            'type' => 'relate',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            'id' => 'ASSIGNED_USER_ID',
            'width' => '10%',
            'default' => true
        ),
        'DATE_MODIFIED' => array(
            'type' => 'datetime',
            'label' => 'LBL_DATE_MODIFIED',
            'width' => '10%',
            'default' => true
        ),
        'DATE_ENTERED' => array(
            'type' => 'datetime',
            'label' => 'LBL_DATE_ENTERED',
            'width' => '10%',
            'default' => false
        )
    ),
    'searchdefs' => array(
        'name' => array(
            'type' => 'name',
            'link' => true,
            'label' => 'LBL_NAME',
            'width' => '10%',
            'name' => 'name'
        ),
        'assigned_user_name' => array(
            'link' => true,
            'type' => 'relate',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            'id' => 'ASSIGNED_USER_ID',
            'width' => '10%',
            'name' => 'assigned_user_name'
        ),
        0 => array(
            'name' => 'assigned_user_id',
            'label' => 'LBL_ASSIGNED_TO',
            'type' => 'enum',
            'function' => array(
                'name' => 'get_user_array',
                'params' => array(
                    0 => false
                )
            ),
            'width' => '10%'
        )
    )
);
