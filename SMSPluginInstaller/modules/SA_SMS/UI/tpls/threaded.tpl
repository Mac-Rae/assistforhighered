<style>
    {literal}
    .sa_sms_threaded{
        background:#bbe6a5;
        color:#534d64;
        padding:10px;
        margin:10px;
        border:1px solid transparent;
        border-radius:4px;
        margin-right: 50px;
    }
    .sa_sms_threaded.crm_out {
        background: #e6d5a5;
        color: #534d64;
        padding: 10px;
        margin: 10px;
        border: 1px solid transparent;
        border-radius: 4px;
        margin-left: 50px;
    }
    .sms_body_textarea{
        width: 100%;
    }
    {/literal}
</style>
<div id="sms_threaded_div">
    {foreach from=$sms_rows item=sms}
        <div class='sa_sms_threaded {$sms.type}'>
            <span><strong>{$SMS_MOD.LBL_THREADED_FROM}: </strong>{$sms.from_name} ({$sms.from_number})</span><br>
            <span><strong>{$SMS_MOD.LBL_THREADED_TO}: </strong>{$sms.to_name} ({$sms.to_number})</span><br>
            <span><strong>{$SMS_MOD.LBL_THREADED_DATE}: </strong>{$sms.date_sent}</span><br><br>
            {$sms.body}
        </div>
    {/foreach}
</div>
{if $showSendForm}
<div>
    <textarea id="sms_threaded_body" class="sms_body_textarea" rows="5" cols="30" maxlength="160" minlength="1"></textarea><br>
    <button id="threaded_sms_send" class="button" type="button">Send SMS</button>
</div>
<script>
    {literal}
    $(document).ready(function(){
        $('#threaded_sms_send').click(function(){
            $.post(
                'index.php',
                {
                    'entryPoint' : 'SA_SMSDialog_Send',
                    'sugar_body_only' : 1,
                    'phone_number' : '{/literal}{$targetNumber}{literal}',
                    'record_type' : '{/literal}{$recordType}{literal}',
                    'record' : '{/literal}{$recordId}{literal}',
                    'sms_body' : $('#sms_threaded_body').val()

                },
                function(data){
                    alert(data.result);
                    console.log(data);
                    if(!data.sms){
                        return;
                    }
                    $('#sms_threaded_body').val('');
                    var sms_div = "<div class='sa_sms_threaded "+data.sms.type+"'>";
                    sms_div += "<span><strong>{/literal}{$SMS_MOD.LBL_THREADED_FROM}{literal}: </strong>"+data.sms.from_name+" ("+data.sms.from_number+")</span><br>";
                    sms_div += "<span><strong>{/literal}{$SMS_MOD.LBL_THREADED_TO}{literal}: </strong>"+data.sms.to_name+ " ("+data.sms.to_number+")</span><br>";
                    sms_div += "<span><strong>{/literal}{$SMS_MOD.LBL_THREADED_DATE}{literal}: </strong>"+data.sms.date_sent+"</span><br><br>";
                    sms_div += data.sms.sms_body;
                    sms_div += "</div>";
                    $('#sms_threaded_div').append($(sms_div));
                },
                'JSON'
            );
        });
    });
    {/literal}
</script>
{/if}