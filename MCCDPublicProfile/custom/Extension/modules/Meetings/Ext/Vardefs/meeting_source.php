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
