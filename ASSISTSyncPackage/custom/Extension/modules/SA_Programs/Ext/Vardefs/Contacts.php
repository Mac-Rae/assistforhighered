<?php
$dictionary['SA_Program']['fields']['contacts'] = array(
    'name' => 'contacts',
    'vname' => 'LBL_CONTACTS',
    'type' => 'link',
    'relationship' => 'Contacts_SA_Programs',
    'source' => 'non-db'
);

$dictionary['SA_Program']['fields']['contacts_id'] = array(
    'name' => 'contacts_id',
    'vname' => 'LBL_CONTACTS_ID',
    'type' => 'id',
    'link' => 'contacts',
    'audited' => true
);$dictionary['SA_Program']['fields']['contacts_name'] = array(
    'name' => 'contacts_name',
    'rname' => 'name',
    'id_name' => 'contacts_id',
    'vname' => 'LBL_CONTACTS_NAME',
    'join_name' => 'contacts',
    'type' => 'relate',
    'link' => 'contacts',
    'table' => 'contacts',
    'module' => 'Contacts',
    'source' => 'non-db'
);
