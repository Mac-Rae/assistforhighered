<h2>AthenaConfig</h2>
{if $error}
    <div class="error-msg">{$error}</div>
{/if}
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=AthenaBulkImport&do=upload">

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_BULK_FILE}</span>
            </td>
            <td>
                <input type='file' size='20' id="athenaconfig_bulk_file"
                       name='athenaconfig_bulk_file'
                       accept="text/csv,.csv">
            </td>
        </tr>
    </table>
    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                <input title="{$MOD.LBL_ATHENACONFIG_UPLOAD_BULK}"
                       accessKey="{$APP.LBL_SAVE_BUTTON_KEY}"
                       class="button primary"
                       type="submit"
                       name="save"
                       onclick="return check_form('ConfigureSettings');"
                       value="  {$MOD.LBL_ATHENACONFIG_UPLOAD_BULK}  ">
                &nbsp;
                <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}"
                       onclick="document.location.href='index.php?module=Administration&action=index'"
                       class="button" type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  ">
            </td>
        </tr>
    </table>
</form>
