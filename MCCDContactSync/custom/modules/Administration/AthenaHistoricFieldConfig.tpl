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
                       name='assist_athena[historic_table]'
                       value='{$config.assist_athena.historic_table}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_MODULE}</span>
            </td>
            <td scope="row">
                <select id="athenaconfig_historic_module" name='assist_athena[historic_module]'>
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
                       name='assist_athena[historic_updated_field]'
                       value='{$config.assist_athena.historic_updated_field}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_ID_FIELD}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_historic_id_field"
                       name='assist_athena[historic_id_field]'
                       value='{$config.assist_athena.historic_id_field}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_DATE}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_last_historic_run"
                       name='assist_athena[last_historic_run]'
                       value='{$config.assist_athena.last_historic_run}'>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HISTORIC_EMPLID}</span>
            </td>
            <td scope="row">
                <input type='text' size='20' id="athenaconfig_last_historic_id"
                       name='assist_athena[last_historic_id]'
                       value='{$config.assist_athena.last_historic_id}'>
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
    <table id="relTable" style="width: 50%;" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_REL_REL}</span>
            </td>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_REL_MAIN_FIELD}</span>
            </td>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_REL_SECONDARY_FIELD}</span>
            </td>
        </tr>
    </table>
    <button type="button" id="add_rel_button" class="button">{$MOD.LBL_ATHENACONFIG_ADD_REL}</button>
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
                'entryPoint' : 'assistSyncTestMapping',
                'assist_athena_crm_fields' : [],
                'assist_athena_athena_fields' : [],
                'assist_athena_rel_fields' : [],
                'assist_athena_main_fields' : [],
                'assist_athena_secondary_fields' : [],
                'type' : "historic",
                'mapping_module' : $('#athenaconfig_historic_module').val(),
                'table' : $('#athenaconfig_historic_table').val(),
                'historic_id_field' : $('#athenaconfig_historic_id_field').val(),
                'historic_updated_field' : $('#athenaconfig_historic_updated_field').val()
            };
            var fields = $('.athena_fields').toArray();
            for(var f in fields){
                data["assist_athena_athena_fields"].push(fields[f].value);
            }
            fields = $('.crm_fields').toArray();
            for(var f in fields){
                data["assist_athena_crm_fields"].push(fields[f].value);
            }
            fields = $('.rel_fields').toArray();
            for(var f in fields){
                data["assist_athena_rel_fields"].push(fields[f].value);
            }
            fields = $('.main_fields').toArray();
            for(var f in fields){
                data["assist_athena_main_fields"].push(fields[f].value);
            }
            fields = $('.secondary_fields').toArray();
            for(var f in fields){
                data["assist_athena_secondary_fields"].push(fields[f].value);
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
            var row = "<tr> <td scope='row'> <input type='text' size='20' class='athena_fields' name='assist_athena_athena_fields[]' value='"+athenaField+"'> </td>";
            row += "<td><input type='text' size='20' name='assist_athena_crm_fields[]' class='crm_fields' value='"+crmField+"'></td>";
            row += "<td><button class='button' type='button' onclick='removeField(this)'>x</button></td></tr>";

            $('#fieldTable').append(row);
        }
        function addNewRel(e, rel, main, secondary){
            if(typeof rel === 'undefined'){
                rel = '';
            }
            if(typeof main === 'undefined'){
                main = '';
            }
            if(typeof secondary === 'undefined'){
                secondary = '';
            }
            var row = "<tr> <td scope='row'> <select class='rel_fields' name='assist_athena_rel_fields[]'></select> </td>";
            row += "<td><input type='text' size='20' name='assist_athena_main_fields[]' class='main_fields' value='"+main+"'></td>";
            row += "<td><input type='text' size='20' name='assist_athena_secondary_fields[]' class='secondary_fields' value='"+secondary+"'></td>";
            row += "<td><button class='button' type='button' onclick='removeField(this)'>x</button></td></tr>";
            var $row = $(row);
            var select = $row.find('.rel_fields');
            $.get(
                'index.php?entryPoint=assistSyncFieldOptions&sugar_body_only=1&module='+$('#athenaconfig_historic_module').val(),
                {},
                function(data){
                    select.html(data);
                    select.val(rel);
                },
            );

            $('#relTable').append($row);
        }
        $(document).ready(function(){
            $('#add_field_button').click(addNewField);
            $('#add_rel_button').click(addNewRel);
            $('#test_mapping_button').click(testMapping);
        });
{/literal}
{foreach from=$config.assist_athena.historic_field_mapping key=athenaField item=crmField}
    addNewField(false,{$athenaField|json_encode},{$crmField|json_encode});
{/foreach}
{foreach from=$config.assist_athena.historic_field_mapping_rel key=relField item=relData}
        addNewRel(false,{$relField|json_encode},{$relData.main|json_encode},{$relData.secondary|json_encode});
{/foreach}
    </script>