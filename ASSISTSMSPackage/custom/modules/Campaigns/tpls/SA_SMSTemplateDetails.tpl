<div class="template-panel">
    <div class="template-panel-container panel">
        <div class="template-container-full">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th colspan="4" align="left" ><h4 class="header-4">{$MOD.LBL_WIZ_SA_SMS_DETAILS}</h4></th>
                </tr>
                <tr>
                    <td scope="col"><span sugar='slot14'>{$MOD.LBL_SA_SMS_MESSAGE_CONTENTS}<span class="required">*</span></span sugar='slot'></td>
                    <td ><span sugar='slot14b'>
                            <textarea name="sa_sms_contents" maxlength="160">{$SA_SMS_TEMPLATE}</textarea>
						</span sugar='slot'>
                    </td>
                </tr>
                <tr>
                    <td scope="col"><span sugar='slot14'></span sugar='slot'></td>
                    <td ><span sugar='slot14b'>
                            <input type="button" value="{$MOD.LBL_SA_SMS_TEMPLATE}" onclick='open_popup(
                                    "SA_SMSTemplate",
                                    600,
                                    400,
                                    "",
                                    true,
                                    false,{literal}
                                    {
                                        "call_back_function":"template_return",
                                        "form_name":"EditView",
                                        "field_to_name_array":{
                                            "description":"sa_sms_contents"
                                        }
                                    },{/literal}
                                    "single",
                                    true
                                    );'/>
						</span sugar='slot'>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
{literal}
<script>
    function template_return(data){
        $('[name=sa_sms_contents]').val(data.name_to_value_array.sa_sms_contents);
    }
</script>
{/literal}