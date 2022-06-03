<h2>MaintenanceMode</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=MaintenanceMode&do=save">

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_MAINTENANCEMODE_CONFIG_ENABLED}</span>
            </td>
            <td>
                <input type='checkbox' size='20' id="maintenancemode_config_enabled"
                       name='maintenancemode[enabled]'
                       value='1'
                        {if $config.maintenancemode.enabled}checked="checked"{/if}
                >
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_MAINTENANCEMODE_CONFIG_PAGE}</span>
            </td>
            <td>
                <textarea id="maintenancemode_config_page"
                       name='maintenancemode[page]'>{$config.maintenancemode.page}</textarea>
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
        addToValidateCallback('ConfigureSettings', 'maintenancemode_config_enabled', 'bool', false, '{/literal}{$MOD.LBL_MAINTENANCEMODE_PAGE_NEEDED}{literal}',function(){
            if(!$("#maintenancemode_config_enabled").is(":checked")){
                return true;
            }
            if($("#maintenancemode_config_page").val()){
                return true;
            }
           return false;
        });
    });
    {/literal}
</script>