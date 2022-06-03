<?php
 // created: 2021-07-01 09:32:59
$layout_defs["SA_ContactCenters"]["subpanel_setup"]['sa_contactcenters_users_1'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_CONTACTCENTERS_USERS_1_FROM_USERS_TITLE',
  'get_subpanel_data' => 'sa_contactcenters_users_1',
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
