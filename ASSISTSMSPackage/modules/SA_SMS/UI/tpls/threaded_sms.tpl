{foreach from=$sms_rows item=sms}
    <div class='sa_sms_threaded {$sms.type} {if $sms.is_scheduled}scheduled{/if}' data-smsid="{$sms.id}">
        <span><strong>{$SMS_MOD.LBL_THREADED_DATE}: </strong>{$sms.date_sent} {if $sms.is_scheduled}<strong>{$SMS_MOD.LBL_SCHEDULED}</strong>{/if}</span><br><br>
        {$sms.body}
    </div>
{/foreach}