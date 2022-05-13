<form id="sa_sms_dialog" action="index.php">
    <input type="hidden" name="entryPoint" value="SA_SMSDialog_Send">
    <input type="hidden" name="sugar_body_only" value="1">
    <div class="form-group">
        <label for="">{$SMS_MOD.LBL_SMS_DIALOG_TO}:</label>
        <span><strong>{$record.name} - {$phoneNumber}</strong></span>
        <input type="hidden" name="phone_number" value="{$phoneNumber}"/>
        <input type="hidden" name="record_type" value="{$record.type}"/>
        <input type="hidden" name="record" value="{$record.id}"/>
    </div>
    <div class="form-group">
        <label for="sms_body">{$SMS_MOD.LBL_SMS_DIALOG_BODY}:</label>
        <textarea class="form-control" id="sms_body" name="sms_body"></textarea>
    </div>
    <button type="submit" id="sendSMSButton" class="btn btn-default">{$SMS_MOD.LBL_SMS_DIALOG_SEND}</button>
    <button type="button" onclick="sms_mb.hide();sms_mb.destruct();" class="btn btn-default">{$SMS_MOD.LBL_SMS_DIALOG_CANCEL}</button>
</form>
{literal}
<script>
    $(document).ready(function(){
        $('#sendSMSButton').click(function(e){
            e.preventDefault();
            if(!$('#sms_body').val()){
                alert('{/literal}{$SMS_MOD.LBL_SMS_DIALOG_NO_BODY}{literal}');
                return false;
            }
            if(!confirm('{/literal}{$SMS_MOD.LBL_SEND_SMS_CONFIRM}{literal}')){
                return false;
            }
            var form = $('#sa_sms_dialog');
            var actionUrl = form.attr('action');
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                success: function(data)
                {
                    alert(data.result);
                },
                dataType : 'json',
            });
            sms_mb.hide();
            sms_mb.destruct();
            return false;
        });
    });
</script>
{/literal}