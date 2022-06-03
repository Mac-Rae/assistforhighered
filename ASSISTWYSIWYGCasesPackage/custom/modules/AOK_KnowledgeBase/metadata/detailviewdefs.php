<?php
$module_name = 'AOK_KnowledgeBase';
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
          'MARK_REVIEW_NEEDED' =>
            array(
                'customCode' => '{if $fields.quality_c.value != "review"}<input type="submit" class="button" onClick="var _form = document.getElementById(\'formDetailView\');_form.action.value=\'markReviewNeeded\';SUGAR.ajaxUI.submitForm(_form);" value="{$MOD.LBL_MARK_REVIEW_NEEDED}">{else}<input style="height: 32px;" type="button" disabled="disabled" class="button" value="{$MOD.LBL_MARK_REVIEW_NEEDED}">{/if}',
            ),
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'quality_c',
            'studio' => 'visible',
            'label' => 'LBL_QUALITY',
          ),
          1 => 'quality_user_log',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'revision',
            'label' => 'LBL_REVISION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'institution_c',
            'studio' => 'visible',
            'label' => 'LBL_INSTITUTION',
          ),
          1 => 
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
            'customCode' => '{$fields.description.value}',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'additional_info',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_INFO',
            'customCode' => '{$fields.additional_info.value}',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'author',
            'studio' => 'visible',
            'label' => 'LBL_AUTHOR',
          ),
          1 => 
          array (
            'name' => 'approver',
            'studio' => 'visible',
            'label' => 'LBL_APPROVER',
          ),
        ),
      ),
    ),
  ),
);
;
?>
