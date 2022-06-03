<h2>AthenaConfig</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=AthenaBulkImport&do=process">

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_BULK_TYPE}</span>
            </td>
            <td>
                <select id="athenaconfig_bulk_type"
                        name='athenaconfig_bulk_type'>
                    {$bulkTypes}
                </select>
            </td>
        </tr>
        {foreach from=$headers item=header}
            <tr>
                <td scope="row">
                    <span>{$header}<input type="hidden" name="mapping_from[]" value="{$header}"/></span>
                </td>
                <td>
                    <select name="mapping_to[]">
                        <option value=""></option>
                        {foreach from=$field_options key=k item=v}
                            <option {if $default_mapping[$header] == $k}selected="selected"{/if} value="{$k}">{$v}</option>
                        {/foreach}
                    </select>

                </td>
            </tr>
        {/foreach}

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
<script>
    {literal}
    $(document).ready(
        function(){
            var bulkTypeField = $('#athenaconfig_bulk_type');
            bulkTypeField.change(function(){
                    if(bulkTypeField.val() != 'addUpdate'){
                        alert({/literal}{$MOD.LBL_ATHENACONFIG_UPLOAD_BULK_WARNING|json_encode}{literal})
                    }
                }
            );
        }
    );
    {/literal}
</script>