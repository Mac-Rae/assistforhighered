<style>
    {literal}
    #early_alert_span{
        width: 100%;
    }
    .early_alert{
        width: 100%;
    }
    .early_alert hr{
        border-top: 1px dotted {/literal}{$THEMECONFIG.early_alert_hr_color}{literal};
    }
    .early_alert h3{
        color: {/literal}{$THEMECONFIG.early_alert_title}{literal};
        font-size: 130%
    }
    .early_alert_description{
        color: {/literal}{$THEMECONFIG.early_alert_description}{literal};
    }
    .early_alert button{
        color: {/literal}{$THEMECONFIG.early_alert_button}{literal};
        background-color: {/literal}{$THEMECONFIG.early_alert_button_bg}{literal};
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .early_alert a{
        color: {/literal}{$THEMECONFIG.early_alert_link}{literal};
    }
    .early_alert a:hover{
        color: {/literal}{$THEMECONFIG.early_alert_link_hover}{literal};
    }
    {/literal}
</style>
<div class="early_alert">
<hr>
<h3>{$early_alert_config.title}</h3>
<span class="early_alert_description">{$early_alert_config.description}</span>
<br>
<button
        onclick='window.open({$report_url},"_blank");'
        value="{$early_alert_config.button_title}"
        class="button primary">{$early_alert_config.button_title}</button><br>
<a onclick='window.open({$support_url},"_blank");'>{$early_alert_config.customer_text}</a>
</div>
