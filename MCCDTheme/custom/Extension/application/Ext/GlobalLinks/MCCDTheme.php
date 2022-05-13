<?php
unset($global_control_links['training']);
unset($global_control_links['about']);
if(!empty($sugar_config['maricopatheme']['support_url'])) {
    $global_control_links['mccd_support'] = array('linkinfo' => array($app_strings['LNK_MCCD_SUPPORT'] => $sugar_config['maricopatheme']['support_url'],'target' => '_blank',),
        'submenu' => '',

    );
}
if(!empty($sugar_config['maricopatheme']['training_url'])) {
    $global_control_links['mccd_training'] = array('linkinfo' => array($app_strings['LNK_MCCD_TRAINING'] => $sugar_config['maricopatheme']['training_url'],'target' => '_blank',),
        'submenu' => '',

    );
}

if(!empty($sugar_config['maricopatheme']['feedback_url'])) {
    $global_control_links['mccd_feedback'] = array('linkinfo' => array($app_strings['LNK_MCCD_FEEDBACK'] => $sugar_config['maricopatheme']['feedback_url'],'target' => '_blank',),
        'submenu' => '',

    );
}