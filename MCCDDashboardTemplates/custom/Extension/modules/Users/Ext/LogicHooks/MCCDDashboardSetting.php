<?php
$hook_array['after_relationship_add'][] = array(
    99,
    'MCCD - Set dashboard on role relate',
    'modules/SA_DashboardTemplates/MCCDTemplateHooks.php',
    'MCCDTemplateHooks',
    'setDashboards');