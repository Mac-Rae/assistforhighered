<h2>Public Profile</h2>
<form style="width: 50%;" id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=PublicProfile&do=save">

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_PUBLICPROFILE_ALLOWLIST}</span>
            </td>
            <td>


                <select style="width: 90%;" multiple id="public_profile_users" name="publicprofile[users][]">
                    {$vanityURLUsers}
                </select>
                <br>
                <span class="id-ff multiple">
                    <button type="button" name="btn_public_profile_user_name"
                            id="btn_public_profile_user_name" tabindex="0" title="Select User" class="button firstChild" value="Select User"
                        {literal}
                        onclick='open_popup(
                                "Users",
                                600,
                                400,
                                "",
                                true,
                                false,
                        {"call_back_function":"set_return","form_name":"ConfigureSettings","field_to_name_array":
                            {"id":"public_profile_user_id","name":"public_profile_user_name"}},
                                "MultiSelect",
                                true
                                );' >
                        {/literal}
                        <span class="suitepicon suitepicon-action-select"></span>
                    </button>
                    <button type="button" name="btn_clr_public_profile_user_name" id="btn_clr_public_profile_user_name"
                            tabindex="0" title="Clear User"  class="button lastChild"
                            onclick="clearSelectedUsers();"  value="Clear User" >
                        <span class="suitepicon suitepicon-action-clear"></span>
                    </button>
                </span>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_PUBLICPROFILE_HEADER}</span>
            </td>
            <td>
                <textarea rows=10 cols="40"  name=publicprofile[top_html]">{$config.publicprofile.top_html}</textarea>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_PUBLICPROFILE_FOOTER}</span>
            </td>
            <td>
                <textarea rows=10 cols="40" name=publicprofile[bottom_html]">{$config.publicprofile.bottom_html}</textarea>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_PUBLICPROFILE_CSS}</span>
            </td>
            <td>
                <textarea rows=10 cols="40" name=publicprofile[custom_css]">{$config.publicprofile.custom_css}</textarea>
            </td>
        </tr>
        {foreach from=$colours item=colour}
            <tr>
                <td scope="row">
                    <span>{$colour.label}</span>
                </td>
                <td>
                    <input type='color' size='20' id="publicprofile_theme_{$colour.name}"
                           name='publicprofile[theme][{$colour.name}]'
                           style="text-align: right;" value='{$colour.value}'>
                    <button type="button" onclick="$('#publicprofile_theme_{$colour.name}').val('{$colour.default}');return false;"><span class="suitepicon suitepicon-action-clear"></span></button>
                </td>
            </tr>
        {/foreach}
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_PUBLICPROFILE_RECAPTCHA_SITE_KEY}</span>
            </td>
            <td>
                <input name=publicprofile[recaptcha_key]" value="{$config.publicprofile.recaptcha_key}"/>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_PUBLICPROFILE_RECAPTCHA_SECRET}</span>
            </td>
            <td>
                <input autocomplete="off" name=publicprofile[recaptcha_secret]" type="password" value="{$config.publicprofile.recaptcha_secret}"/>
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
                       onclick="return doSubmit();"
                       value="  {$APP.LBL_SAVE_BUTTON_LABEL}  ">
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
    function selectUsers(){
        $('#public_profile_users option').attr('selected','selected');
    }
    function clearSelectedUsers(){
        $('#public_profile_users').find("option:selected").remove();
    }
    function doSubmit(){
        if(!check_form('ConfigureSettings')){
            return false;
        }
        selectUsers();
        return true;
    }
    function set_return(passthru){
        var data = {
            'module': 'Administration',
            'action': 'getPublicProfileUsers',
            'data': passthru,
            'to_pdf' : 1,
        };
        $.get('index.php',data,function(ret){
            console.log(ret);
            $.each(ret, function(id, name) {
                if($('#public_profile_users').find("option[value='"+id+"']").length == 0) {
                    $('#public_profile_users').append($("<option value='" + id + "'>" + name + "</option>"));
                }
            });
        },'json');
    }
</script>
{/literal}