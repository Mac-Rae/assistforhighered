<table border='0' cellpadding='0' cellspacing='0' width='100%' data-workflow-action='send-sms'>
    <tr>
        <td scope="row" valign="top">
            <label>{$MOD.LBL_SASMS_TO}:<span class="required">*</span></label>
        </td>
        <td>
            <select name="aow_actions_param[{$line}][to]">
                {$to_options}
            </select>
        </td>
    </tr>
    <tr>
        <td scope="row" valign="top">
            <label>{$MOD.LBL_SASMS_BODY}:<span class="required">*</span></label>
        </td>
        <td>
            <textarea cols=100 rows="5" name="aow_actions_param[{$line}][sms_body]">{$smsBody}</textarea>
        </td>
    </tr>
</table>