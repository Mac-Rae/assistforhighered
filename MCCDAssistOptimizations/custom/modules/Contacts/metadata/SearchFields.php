<?php
// created: 2021-09-23 13:27:10
$searchFields['Contacts'] = array (
  'first_name' => 
  array (
    'query_type' => 'default',
  ),
  'last_name' => 
  array (
    'query_type' => 'default',
  ),
  'search_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
    ),
    'force_unifiedsearch' => true,
  ),
  'lead_source' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'lead_source_dom',
    'template_var' => 'LEAD_SOURCE_OPTIONS',
  ),
  'do_not_call' => 
  array (
    'query_type' => 'default',
    'input_type' => 'checkbox',
    'operator' => '=',
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'phone_mobile',
      1 => 'phone_work',
      2 => 'phone_other',
      3 => 'phone_fax',
      4 => 'assistant_phone',
      5 => 'phone_home',
    ),
  ),
  'email' => 
  array (
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'optinprimary' => 
  array (
    'type' => 'enum',
    'options' => 'email_confirmed_opt_in_dom',
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND eabr.primary_address = \'1\' AND ea.confirm_opt_in LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_OPT_IN_FLAG_PRIMARY',
  ),
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'checked_only' => true,
    'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = \'Contacts\'
			                        and favorites.assigned_user_id = \'{1}\'',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'assistant' => 
  array (
    'query_type' => 'default',
  ),
  'address_street' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_street',
      1 => 'alt_address_street',
    ),
  ),
  'address_city' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_city',
      1 => 'alt_address_city',
    ),
  ),
  'address_state' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_state',
      1 => 'alt_address_state',
    ),
  ),
  'address_postalcode' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_postalcode',
      1 => 'alt_address_postalcode',
    ),
  ),
  'address_country' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_country',
      1 => 'alt_address_country',
    ),
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'campaign_name' => 
  array (
    'query_type' => 'default',
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'description' => 
  array (
    'query_type' => 'default',
  ),
  'salutation' => 
  array (
    'query_type' => 'default',
  ),
  'title' => 
  array (
    'query_type' => 'default',
  ),
  'photo' => 
  array (
    'query_type' => 'default',
  ),
  'department' => 
  array (
    'query_type' => 'default',
  ),
  'phone_home' => 
  array (
    'query_type' => 'default',
  ),
  'phone_mobile' => 
  array (
    'query_type' => 'default',
  ),
  'phone_work' => 
  array (
    'query_type' => 'default',
  ),
  'phone_other' => 
  array (
    'query_type' => 'default',
  ),
  'phone_fax' => 
  array (
    'query_type' => 'default',
  ),
  'email1' => 
  array (
    'query_type' => 'default',
  ),
  'lawful_basis' => 
  array (
    'query_type' => 'default',
  ),
  'date_reviewed' => 
  array (
    'query_type' => 'default',
  ),
  'primary_address_street' => 
  array (
    'query_type' => 'default',
  ),
  'primary_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'primary_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'primary_address_postalcode' => 
  array (
    'query_type' => 'default',
  ),
  'primary_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_street' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_postalcode' => 
  array (
    'query_type' => 'default',
  ),
  'alt_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'assistant_phone' => 
  array (
    'query_type' => 'default',
  ),
  'birthdate' => 
  array (
    'query_type' => 'default',
  ),
  'joomla_s_id' =>
  array (
    'query_type' => 'default',
  ),
  'portal_user_type' => 
  array (
    'query_type' => 'default',
  ),
);