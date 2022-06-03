<?php

$dictionary['Meeting']['fields']['meeting_source'] = array(
    'name' => 'meeting_source',
    'vname' => 'LBL_MEETING_SOURCE',
    'type' => 'enum',
    'options' => 'meetings_meeting_source_dom',
    'len' => 50,
    'required' => false,
    'audited' => true,
    'reportable' => true,
    'importable' => true,
    'unified_search' => true,
    'inline_edit' => true
);
$dictionary['Meeting']['fields']['meeting_type'] = array(
    'name' => 'meeting_type',
    'vname' => 'LBL_MEETING_TYPE',
    'type' => 'enum',
    'options' => 'sa_publicprofile_meeting_types',
    'len' => 50,
    'required' => false,
    'audited' => true,
    'reportable' => true,
    'importable' => true,
    'unified_search' => true,
    'inline_edit' => true
);
