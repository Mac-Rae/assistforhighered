<?php
$module_name = 'SA_Audits';
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
                        'useTabs' => false,
                        'tabDefs' =>
                            array (
                                'DEFAULT' =>
                                    array (
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'includes' =>
                            array (
                            ),
                        'syncDetailEditViews' => true,
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
                                                'name' => 'parent_name',
                                                'label' => 'LBL_PARENT',
                                            ),
                                        1 => 'change_log_link',
                                    ),
                                2 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'parent_type',
                                                'label' => 'LBL_PARENT_TYPE',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'audit_action',
                                                'label' => 'LBL_AUDIT_ACTION',
                                            ),
                                    ),
                                3 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'ip_address',
                                                'label' => 'LBL_IP_ADDRESS',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'date_entered',
                                                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                                                'label' => 'LBL_DATE_ENTERED',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
;
?>
