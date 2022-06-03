<?php
$layout_defs['AOK_KnowledgeBase']['subpanel_setup']['cases'] = array(
    'order' => 0,
    'module' => 'Cases',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_CASES',
    'get_subpanel_data' => 'cases',
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
