<?php
$hook_array['after_relationship_add'][] = array(
    99,
    'ASSIST - Set dashboard on role relate',
    'modules/SA_DashboardTemplates/ASSISTTemplateHooks.php',
    'ASSISTTemplateHooks',
    'setDashboards');