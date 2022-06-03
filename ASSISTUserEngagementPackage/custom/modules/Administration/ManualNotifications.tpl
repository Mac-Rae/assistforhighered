<h2>Manual User Notifications</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=SendManualNotifications">
    <input type="hidden" name="to_pdf" value="1"/>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_MANUALNOTIFICATIONS_NOTIFICATION_TITLE}</span>
            </td>
            <td style="padding:5px;">
                <input type='text' size='20' id="manualnotifications_notification_title"
                       name='manualnotifications_notification_title'
                       value=''>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_MANUALNOTIFICATIONS_NOTIFICATION_TEXT}</span>
            </td>
            <td style="padding:5px;">
                <textarea type='text' size='20' id="manualnotifications_notification_text"
                       name='manualnotifications_notification_text'
                ></textarea>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_MANUALNOTIFICATIONS_NOTIFICATION_USERS}</span>
            </td>
            <td style="padding:5px;">
                <select style="width: 50%;" multiple id="notification_users" name="manualnotifications_notification_users[]">

                </select>
                <br>
                <span class="id-ff multiple">
                    <button type="button" name="btn_notification_user_name" id="btn_notification_user_name" tabindex="0" title="Select User" class="button firstChild" value="Select User"
                        {literal}
                        onclick='open_popup(
                                "Users",
                                600,
                                400,
                                "",
                                true,
                                false,
                        {"call_back_function":"set_return","form_name":"ConfigureSettings","field_to_name_array":{"id":"notification_user_id","name":"notification_user_name"}},
                                "MultiSelect",
                                true
                                );' >
                        {/literal}
                        <span class="suitepicon suitepicon-action-select"></span>
                    </button>
                    <button type="button" name="btn_clr_notification_user_name" id="btn_clr_notification_user_name" tabindex="0" title="Clear User"  class="button lastChild"
                                                                              onclick="clearSelectedUsers();"  value="Clear User" >
                        <span class="suitepicon suitepicon-action-clear"></span>
                    </button>
                </span>
            </td>
        </tr>
    </table>

    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                <input title="{$MOD.LBL_TRIGGER_MANUAL_NOTIFICATIONS}"
                       accessKey="{$APP.LBL_SAVE_BUTTON_KEY}"
                       class="button primary"
                       type="submit"
                       name="save"
                       onclick="return doSubmit();"
                       value="{$MOD.LBL_TRIGGER_MANUAL_NOTIFICATIONS}">
                &nbsp;
                <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}"
                       onclick="document.location.href='index.php?module=Administration&action=index'"
                       class="button" type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  ">
            </td>
        </tr>
    </table>
</form>
{literal}
<script>
    function doSubmit(){
        if(!check_form('ConfigureSettings')){
            return false;
        }
        if(!confirm('{/literal}{$MOD.LBL_MANUALNOTIFICATIONS_CONFIRM}{literal}')){
            return false;
        }
        selectUsers();
        return true;
    }
    function selectUsers(){
        $('#notification_users option').attr('selected','selected');
    }
    function clearSelectedUsers(){
        $('#notification_users').find("option:selected").remove();
    }
    function set_return(passthru){
        var data = {
            'module': 'Administration',
            'action': 'getNotificationUsers',
            'data': passthru,
            'to_pdf' : 1,
        };
        $.get('index.php',data,function(ret){
            $.each(ret, function(id, name) {
                if($('#notification_users').find("option[value='"+id+"']").length == 0) {
                    $('#notification_users').append($("<option value='" + id + "'>" + name + "</option>"));
                }
            });
        },'json');
    }
    $(document).ready(function() {
        addToValidate('ConfigureSettings', 'manualnotifications_notification_text', 'varchar', true, '{/literal}{$MOD.LBL_MANUALNOTIFICATIONS_NOTIFICATION_TEXT}{literal}')
        addToValidateCallback('ConfigureSettings', 'manualnotifications_notification_title', 'varchar', true, '{/literal}{$MOD.LBL_NOTIFICATIONS_USERS_NEEDED}{literal}',function(){
            if($("#notification_users option").length > 0){
                return true;
            }
            return false;
        });
    });
</script>
{/literal}