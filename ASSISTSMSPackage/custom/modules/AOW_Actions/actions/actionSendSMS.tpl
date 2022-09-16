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
            <label>{$MOD.LBL_SASMS_TEMPLATE}:<span class="required">*</span></label>
        </td>
        <td>
            <select cols=100 rows="5" name="aow_actions_param[{$line}][sms_template]">
                {$smsTemplateOptions}
            </select>
        </td>
    </tr>
</table>