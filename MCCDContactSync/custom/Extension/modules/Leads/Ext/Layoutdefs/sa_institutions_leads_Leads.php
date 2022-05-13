<?php
 // created: 2021-03-09 15:32:57
$layout_defs["Leads"]["subpanel_setup"]['sa_institutions_leads'] = array (
  'order' => 100,
  'module' => 'SA_Institutions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_INSTITUTIONS_LEADS_FROM_SA_INSTITUTIONS_TITLE',
  'get_subpanel_data' => 'sa_institutions_leads',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
