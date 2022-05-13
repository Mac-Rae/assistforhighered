<?php
$module_name = 'SA_Audits';
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
                                        1 => '',
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
                                                'comment' => 'Date record created',
                                                'label' => 'LBL_DATE_ENTERED',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
;
?>
