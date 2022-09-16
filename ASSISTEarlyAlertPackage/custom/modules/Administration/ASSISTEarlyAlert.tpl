<h2>{$MOD.LBL_ASSISTEARLYALERT_GROUP_TITLE}</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=ASSISTEarlyAlert&do=save">

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTEARLYALERT_TITLE}</span>
            </td>
            <td>
                <input type='text' size='20' id="assistearlyalert_title"
                       name='assistearlyalert[title]'
                       value='{$config.assistearlyalert.title}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTEARLYALERT_DESCRIPTION}</span>
            </td>
            <td>
                <textarea size='20' id="assistearlyalert_description"
                       name='assistearlyalert[description]'
                >{$config.assistearlyalert.description}</textarea>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTEARLYALERT_CUSTOMER_TEXT}</span>
            </td>
            <td>
                <input type='text' size='20' id="assistearlyalert_customer_text"
                       name='assistearlyalert[customer_text]'
                       value='{$config.assistearlyalert.customer_text}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTEARLYALERT_BUTTON_TITLE}</span>
            </td>
            <td>
                <input type='text' size='20' id="assistearlyalert_button_title"
                       name='assistearlyalert[button_title]'
                       value='{$config.assistearlyalert.button_title}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTEARLYALERT_REPORT_BASE_URL}</span>
            </td>
            <td>
                <input type='text' size='20' id="assistearlyalert_report_base_url"
                       name='assistearlyalert[report_base_url]'
                       value='{$config.assistearlyalert.report_base_url}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTEARLYALERT_SUPPORT_URL}</span>
            </td>
            <td>
                <input type='text' size='20' id="assistearlyalert_support_url"
                       name='assistearlyalert[support_url]'
                       value='{$config.assistearlyalert.support_url}'>
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
