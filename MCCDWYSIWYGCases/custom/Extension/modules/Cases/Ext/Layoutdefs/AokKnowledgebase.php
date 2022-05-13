<?php
$layout_defs['Cases']['subpanel_setup']['aok_knowledgebase'] = array(
    'order' => 0,
    'module' => 'AOK_KnowledgeBase',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_AOK_KNOWLEDGEBASE',
    'get_subpanel_data' => 'aok_knowledgebase',
    'top_buttons' => array(
        0 => array(
            'widget_class' => 'SubPanelTopButtonQuickCreate'
        ),
        1 => array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect'
        )
    )
);
