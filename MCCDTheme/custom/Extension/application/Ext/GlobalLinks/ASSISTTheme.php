<?php
unset($global_control_links['training']);
unset($global_control_links['about']);
if(!empty($sugar_config['maricopatheme']['support_url'])) {
    $global_control_links['assist_support'] = array('linkinfo' => array($app_strings['LNK_ASSIST_SUPPORT'] => $sugar_config['maricopatheme']['support_url'],'target' => '_blank',),
        'submenu' => '',

    );
}
if(!empty($sugar_config['maricopatheme']['training_url'])) {
    $global_control_links['assist_training'] = array('linkinfo' => array($app_strings['LNK_ASSIST_TRAINING'] => $sugar_config['maricopatheme']['training_url'],'target' => '_blank',),
        'submenu' => '',

    );
}

if(!empty($sugar_config['maricopatheme']['feedback_url'])) {
    $global_control_links['assist_feedback'] = array('linkinfo' => array($app_strings['LNK_ASSIST_FEEDBACK'] => $sugar_config['maricopatheme']['feedback_url'],'target' => '_blank',),
        'submenu' => '',

    );
}