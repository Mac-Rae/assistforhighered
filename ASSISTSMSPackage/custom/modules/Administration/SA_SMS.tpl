<h2>{$MOD.LBL_SA_SMS_CONFIG}</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=SA_SMS&do=save">

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_SA_SMS_PROVIDER}</span>
            </td>
            <td>
                <select id="sa_sms_config_provider" name='sa_sms[provider]'>
                       {$PROVIDER_LIST}
                </select>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_SA_SMS_FROM_NUMBER}<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></span>
            </td>
            <td>
                <input name="sa_sms[from_number]" id="sa_sms_config_from_number" value="{$config.from_number}">
            </td>
        </tr>
        <tr class="twilio_row">
            <td>
                <span>{$MOD.LBL_SA_SMS_TWILIO_WEBHOOK}</span>
            </td>
            <td>
                {$TWILIO_WEBHOOK_URL}
            </td>
        </tr>
        <tr class="twilio_row">
            <td scope="row">
                <span>{$MOD.LBL_SA_SMS_TWILIO_SID}<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></span>
            </td>
            <td>
                <input name="sa_sms[twilio_sid]" id="sa_sms_config_twilio_sid" value="{$config.twilio_sid}">
            </td>
        </tr>
        <tr class="twilio_row">
            <td scope="row">
                <span>{$MOD.LBL_SA_SMS_TWILIO_TOKEN}<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></span>
            </td>
            <td>
                <button type="button" class="btn btn-info" id="change_twilio_token_button">{$MOD.LBL_SA_SMS_CHANGE_TWILIO_TOKEN}</button>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <button id="testConnectionButton" class="button" type="button" value="{$MOD.LBL_SA_SMS_TEST_CONNECTION}">{$MOD.LBL_SA_SMS_TEST_CONNECTION}</button>
            </td>
        </tr>
    </table>

    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                <input title="{$APP.LBL_SAVE_BUTTON_TITLE}"
                       accessKey="{$APP.LBL_SAVE_BUTTON_KEY}"
                       class="button primary"
                       type="submit"
                       name="save"
                       onclick="return check_form('ConfigureSettings');"
                       value="  {$APP.LBL_SAVE_BUTTON_LABEL}  ">
                &nbsp;
                <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}"
                       onclick="document.location.href='index.php?module=Administration&action=index'"
                       class="button" type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  ">
            </td>
        </tr>
    </table>
</form>
<script>
    {literal}
    $(document).ready(function() {
        var changeTokenButton = $('#change_twilio_token_button');
        changeTokenButton.click(function(){
            changeTokenButton.hide();
            changeTokenButton.after(
                $('<input type="password" name="sa_sms[twilio_token]" id="sa_sms_config_twilio_token" value="">')
            );
        });

        var providerEnum = $('#sa_sms_config_provider');
        providerEnum.change(
            function(){
                if(providerEnum.val() === 'Disabled'){
                    $('.twilio_row').hide();
                    removeFromValidate("ConfigureSettings","sa_sms_config_twilio_sid");
                    removeFromValidate("ConfigureSettings","sa_sms_config_twilio_token");
                    $('#testConnectionButton').hide();
                }else{
                    $('.twilio_row').show();
                    addToValidate("ConfigureSettings","sa_sms_config_twilio_sid","varchar",true,{/literal}"{$MOD.LBL_SA_SMS_TWILIO_SID}"{literal});
                    addToValidate("ConfigureSettings","sa_sms_config_twilio_token","varchar",true,{/literal}"{$MOD.LBL_SA_SMS_TWILIO_TOKEN}"{literal});
                    $('#testConnectionButton').show();
                }
            }
        );
        providerEnum.change();

        $('#testConnectionButton').click(
            function(){
                var args = {
                    "entryPoint" : "SA_SMSTestConnection",
                    "to_pdf" : 1,
                    'provider' : $('#sa_sms_config_provider').val(),
                    'twilio_sid' : $('#sa_sms_config_twilio_sid').val(),
                }
                if($('#sa_sms_config_twilio_token').length > 0){
                    args['twilio_token'] = $('#sa_sms_config_twilio_token').val();
                }
                $.post(
                    "index.php",
                    args,
                    function(data) {
                        if(data.error){
                            alert(data.error);
                        }else if(data.success){
                            alert(SUGAR.language.translate('Administration','LBL_SMS_TEST_SUCCESS'));
                        }else{
                            alert(SUGAR.language.translate('Administration','LBL_SMS_TEST_UNKNOWN_ERROR'));
                        }
                    },
                    'json');
            }
        );
    });
    {/literal}
</script>