<?php
$module_name = 'SA_Enrollments';
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
          1 => 
          array (
            'name' => 'emplid',
            'label' => 'LBL_EMPLID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
          1 => 
          array (
            'name' => 'course',
            'label' => 'LBL_COURSE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'credits_attempted',
            'label' => 'LBL_CREDITS_ATTEMPTED',
          ),
          1 => 
          array (
            'name' => 'credits_earned',
            'label' => 'LBL_CREDITS_EARNED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'end_date',
            'label' => 'LBL_END_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'term',
            'label' => 'LBL_TERM',
          ),
          1 => 
          array (
            'name' => 'grade',
            'label' => 'LBL_GRADE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'last_updated_date',
            'label' => 'LBL_LAST_UPDATED_DATE',
          ),
          1 => 
          array (
            'name' => 'sa_institutions_name',
            'label' => 'LBL_SA_INSTITUTIONS_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
