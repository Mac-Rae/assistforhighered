<?php
$dictionary["cases_aok_knowledgebase"] = array(
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => array(
        'cases_aok_knowledgebase' => array(
            'lhs_module' => 'Cases',
            'lhs_table' => 'cases',
            'lhs_key' => 'id',
            'rhs_module' => 'AOK_KnowledgeBase',
            'rhs_table' => 'aok_knowledgebase',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'cases_aok_knowledgebase_c',
            'join_key_lhs' => 'cases_id',
            'join_key_rhs' => 'aok_knowledgebase_id'
        )
    ),
    'table' => 'cases_aok_knowledgebase_c',
    'fields' => array(
        0 => array(
            'name' => 'id',
            'type' => 'varchar',
            'len' => 36
        ),
        1 => array(
            'name' => 'date_modified',
            'type' => 'datetime'
        ),
        2 => array(
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => true
        ),
        3 => array(
            'name' => 'cases_id',
            'type' => 'varchar',
            'len' => 36
        ),
        4 => array(
            'name' => 'aok_knowledgebase_id',
            'type' => 'varchar',
            'len' => 36
        )
    ),
    'indices' => array(
        0 => array(
            'name' => 'cases_aok_knowledgebase_spk',
            'type' => 'primary',
            'fields' => array(
                0 => 'id'
            )
        ),
        1 => array(
            'name' => 'cases_aok_knowledgebase_alt',
            'type' => 'alternate_key',
            'fields' => array(
                0 => 'cases_id',
                1 => 'aok_knowledgebase_id'
            )
        )
    )
);