<?php
$module_name = 'SA_SMS';
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
          1 => 
          array (
            'name' => 'date_sent',
            'label' => 'LBL_DATE_SENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'sms_type',
            'label' => 'LBL_SMS_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'to_number',
            'label' => 'LBL_TO_NUMBER',
          ),
          1 => 
          array (
            'name' => 'from_number',
            'label' => 'LBL_FROM_NUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_RELATED_TO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'third_party',
            'label' => 'LBL_THIRD_PARTY',
          ),
          1 => 
          array (
            'name' => 'third_party_id',
            'label' => 'LBL_THIRD_PARTY_ID',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
