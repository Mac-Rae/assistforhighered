<h2>Athena Historic Field Config</h2>
<style>
    {literal}
    .ui-tooltip {
        opacity: unset;
    }
    {/literal}
</style>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=AthenaHistoricFieldConfig&do=save">
    <table id="settingsTable" style="width: 50%;" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_TABLE}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_historic_table"
                       name='mccd_athena[historic_table]'
                       value='{$config.mccd_athena.historic_table}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_MODULE}</span>
            </td>
            <td scope="row">
                <select id="athenaconfig_historic_module" name='mccd_athena[historic_module]'>
                    {$historicModuleOptions}
                </select>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_UPDATED_FIELD}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_historic_updated_field"
                       name='mccd_athena[historic_updated_field]'
                       value='{$config.mccd_athena.historic_updated_field}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_ID_FIELD}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_historic_id_field"
                       name='mccd_athena[historic_id_field]'
                       value='{$config.mccd_athena.historic_id_field}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_DATE}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_last_historic_run"
                       name='mccd_athena[last_historic_run]'
                       value='{$config.mccd_athena.last_historic_run}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_EMPLID}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_last_historic_id"
                       name='mccd_athena[last_historic_id]'
                       value='{$config.mccd_athena.last_historic_id}'>
            </td>
        </tr>
    </table>
    <table id="fieldTable" style="width: 50%;" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_ATHENAFIELD}</span>
            </td>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_CRMFIELD}</span>
            </td>
        </tr>
    </table>
    <button type="button" id="add_field_button" class="button">{$MOD.LBL_ATHENACONFIG_ADD_FIELD}</button>
    <br>
    <button type="button" id="test_mapping_button" class="button">{$MOD.LBL_ATHENACONFIG_TEST_MAPPING}</button>
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


{literal}
    <script>
        function testMapping(){
            var data = {
                'entryPoint' : 'mccdSyncTestMapping',
                'mccd_athena_crm_fields' : [],
                'mccd_athena_athena_fields' : [],
                'type' : "historic",
                'mapping_module' : $('#athenaconfig_historic_module').val(),
                'table' : $('#athenaconfig_historic_table').val(),
                'historic_id_field' : $('#athenaconfig_historic_id_field').val(),
                'historic_updated_field' : $('#athenaconfig_historic_updated_field').val()
            };
            var fields = $('.athena_fields').toArray();
            for(var f in fields){
                data["mccd_athena_athena_fields"].push(fields[f].value);
            }
            fields = $('.crm_fields').toArray();
            for(var f in fields){
                data["mccd_athena_crm_fields"].push(fields[f].value);
            }
            $.post(
                'index.php',
                data,
                function(d){
                    var mb = messageBox({"showHeader": false, "showFooter": false});
                    mb.setBody(d.replaceAll("\n","<br>"));
                    mb.show();
                }
            );
        }
        function removeField(e){
            $(e).closest('tr').remove();
        }
        function addNewField(e,athenaField,crmField){
            if(typeof athenaField === 'undefined'){
                athenaField = '';
            }
            if(typeof crmField === 'undefined'){
                crmField = '';
            }
            var row = "<tr> <td scope='row'> <input type='text' size='20' class='athena_fields' name='mccd_athena_athena_fields[]' value='"+athenaField+"'> </td>";
            row += "<td><input type='text' size='20' name='mccd_athena_crm_fields[]' class='crm_fields' value='"+crmField+"'></td>";
            row += "<td><button class='button' type='button' onclick='removeField(this)'>x</button></td></tr>";

            $('#fieldTable').append(row);
        }
        $(document).ready(function(){
            $('#add_field_button').click(addNewField);
            $('#test_mapping_button').click(testMapping);
        });
{/literal}
{foreach from=$config.mccd_athena.historic_field_mapping key=athenaField item=crmField}
    addNewField(false,{$athenaField|json_encode},{$crmField|json_encode});
{/foreach}
    </script>