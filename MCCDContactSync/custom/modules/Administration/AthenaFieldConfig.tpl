<h2>{$MOD.LBL_ATHENACONFIG_FIELDCONFIG}</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=AthenaFieldConfig&do=save">

    <table id="fieldTable" style="width: 50%;" border="0" cellspacing="1" cellpadding="0" class="edit view">
    </table>
    <button type="button" id="add_table_button" class="button">{$MOD.LBL_ATHENACONFIG_ADD_TABLE}</button>
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
<style>
    .mapping_table{
        border: solid 1px black;
    }
</style>

    <script>
        function testMapping(){
            var data = {
                'entryPoint' : 'assistSyncTestMapping',
                'assist_athena_crm_fields' : [],
                'assist_athena_athena_fields' : [],
                'assist_athena_last_updated_fields' : [],
                'assist_athena_id_fields' : [],
                'assist_athena_mapping_modules' : [],
                'assist_rel_fields' : [],
                'assist_athena_main_fields' : [],
                'assist_athena_secondary_fields' : [],
            };
            var tables = $('.mapping_name').toArray();
            for(var t in tables){
                $t = $(tables[t]);
                var body = $t.closest("tbody");
                data[$t.attr("name")] = $t.val();
                data['assist_athena_athena_fields'][body.data("index")] = [];
                data['assist_athena_crm_fields'][body.data("index")] = [];
                data['assist_rel_fields'][body.data("index")] = [];
                data['assist_athena_main_fields'][body.data("index")] = [];
                data['assist_athena_secondary_fields'][body.data("index")] = [];
                data['assist_athena_last_updated_fields'][body.data("index")] = body.find('.mapping_last_updated').val();
                data['assist_athena_id_fields'][body.data("index")] = body.find('.mapping_id').val();
                data['assist_athena_mapping_modules'][body.data("index")] = body.find('.mapping_module').val();
                var fields = body.find('.athena_fields').toArray();
                for(f in fields){
                    data['assist_athena_athena_fields'][body.data("index")].push(fields[f].value);
                }
                fields = body.find('.crm_fields').toArray();
                for(f in fields){
                    data['assist_athena_crm_fields'][body.data("index")].push(fields[f].value)
                }
                fields = body.find('.rel_select').toArray();
                for(f in fields){
                    data['assist_rel_fields'][body.data("index")].push(fields[f].value)
                }
                fields = body.find('.main_fields').toArray();
                for(f in fields){
                    data['assist_athena_main_fields'][body.data("index")].push(fields[f].value)
                }
                fields = body.find('.secondary_fields').toArray();
                for(f in fields){
                    data['assist_athena_secondary_fields'][body.data("index")].push(fields[f].value)
                }
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
        function addNewTable(e,tableName,moduleName,lastUpdatedField,idField,data){
            var ind = $('.mapping_table').length;
            var table = "<tbody class='mapping_table' id='mapping_table_"+ind+"' data-index='"+ind+"'>";
            if(!tableName){
                tableName = '';
            }
            if(!idField){
                idField = 'EMPLID';
            }
            if(!lastUpdatedField){
                lastUpdatedField = 'LAST_UPDATED';
            }
            if(!moduleName){
                moduleName = "Contacts";
            }
            table += "<tr><th>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_MAPPING_TABLE')+"</th><td><input class='mapping_name' value='"+tableName+"' name='mapping_table_name_"+ind+"'/></tr>";
            table += "<tr><th>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_MAPPING_MODULE')+"</th><td><select class='mapping_module' name='mapping_module_"+ind+"'>"+{/literal}{$moduleOptions|json_encode}{literal}+"</select></tr>";
            table += "<tr><th>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_MAPPING_LAST_UPDATED_FIELD')+"</th><td><input class='mapping_last_updated' value='"+lastUpdatedField+"' name='mapping_last_updated_field_"+ind+"'/></tr>";
            table += "<tr><th>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_MAPPING_ID_FIELD')+"</th><td><input class='mapping_id' value='"+idField+"' name='mapping_id_field_"+ind+"'/></tr>";

            table += "<tr><td scope='row'><span>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_ATHENAFIELD')+"</span></td>";
            table += "<td scope='row'><span>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_CRMFIELD')+"</span> </td></tr>";

            table += "<tr class='last_field_row'><td><button type='button' id='add_field_button_"+ind+"' class='add_field_button button'>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_ADD_FIELD')+"</button></td></tr>";
            table += "<tr><td scope='row'><span>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_REL_REL')+"</span></td>";
            table += "<td scope='row'><span>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_REL_MAIN_FIELD')+"</span> </td>";
            table += "<td scope='row'><span>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_REL_SECONDARY_FIELD')+"</span> </td></tr>";
            table += "<tr class='last_rel_row'><td><button type='button' id='add_rel_button_"+ind+"' class='add_rel_button button'>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_ADD_RELATIONSHIP')+"</button></td></tr>";

            table += "<tr> <td scope='row'><span>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_LAST_DATE')+"</span> </td>";
            table += "<td scope='row'><input type='text' size='20' class='last_run_date' name='assist_athena[last_run][]'> </td> </tr>";
            table += "<tr><td scope='row'> <span>"+SUGAR.language.translate('Administration','LBL_ATHENACONFIG_LAST_EMPLID')+"</span> </td>";
            table += "<td scope='row'><input type='text' size='20' class='last_run_id' name='assist_athena[last_id][]' > </td> </tr>";

            table += "</tbody>";
            table = $(table);
            if(data && data[tableName]) {
                table.find('.last_run_date').val(data[tableName]['last_run']);
                table.find('.last_run_id').val(data[tableName]['last_run_id']);
            }
            if(moduleName) {
                table.find(".mapping_module").val(moduleName);
            }
            $('#fieldTable').append(table);
            $('#add_field_button_'+ind).click(addNewField);
            $('#add_rel_button_'+ind).click(addNewRelationship);
            return table;
        }
        function addNewField(e,mappingTable,athenaField,crmField){
            if(typeof athenaField === 'undefined'){
                athenaField = '';
            }
            if(typeof crmField === 'undefined'){
                crmField = '';
            }
            var body;
            var ind;
            if(e){
                body = $(e.target).closest('tbody');
                ind = body.data("index");
            }else{
                body = table;
                ind = table.data("index");
            }

            var row = "<tr> <td scope='row'> <input type='text' size='20' class='athena_fields' name='assist_athena_athena_fields["+ind+"][]' value='"+athenaField+"'> </td>";
            row += "<td><input type='text' size='20' name='assist_athena_crm_fields["+ind+"][]' class='crm_fields' value='"+crmField+"'></td>";
            row += "<td><button class='button' type='button' onclick='removeField(this)'>x</button></td></tr>"

            body.find(".last_field_row").before(row);
        }
        function addNewRelationship(e,mappingTable,relField, mainField, secondaryField){
            if(typeof relField === 'undefined'){
                relField = '';
            }
            if(typeof mainField === 'undefined'){
                mainField = '';
            }
            if(typeof secondaryField === 'undefined'){
                secondaryField = '';
            }
            var body;
            var ind;
            if(e){
                body = $(e.target).closest('tbody');
                ind = body.data("index");
            }else{
                body = table;
                ind = table.data("index");
            }

            var row = "<tr> <td scope='row'> <select class='rel_select' name='assist_rel_fields["+ind+"][]'></select> </td>";
            row += "<td scope='row'> <input type='text' size='20' class='main_fields' name='assist_athena_main_fields["+ind+"][]' value='"+mainField+"'> </td>";
            row += "<td><input type='text' size='20' name='assist_athena_secondary_fields["+ind+"][]' class='secondary_fields' value='"+secondaryField+"'></td>";
            row += "<td><button class='button' type='button' onclick='removeField(this)'>x</button></td></tr>"
            var newElem = $(row);
            var selectElem = newElem.find('.rel_select');
            $.get(
                'index.php?entryPoint=assistSyncFieldOptions&sugar_body_only=1&module='+body.find('.mapping_module').val(),
                {},
                function(data){
                    selectElem.html(data);
                    selectElem.val(relField);
                },
            );

            body.find(".last_rel_row").before(newElem);
        }
        $(document).ready(function(){
            $('#add_table_button').click(addNewTable);
            $('#test_mapping_button').click(testMapping)
        });
{/literal}
{foreach from=$config.assist_athena.field_mapping key=mappingTable item=mapping}
        var table = addNewTable(false,{$mappingTable|json_encode},{$mapping.module|json_encode},{$mapping.last_updated_field|json_encode},{$mapping.id_field|json_encode},{$config.assist_athena.last_run_info|@json_encode});
        {foreach from=$mapping.mapping key=athenaField item=crmField}
            {if $crmField}
            addNewField(false,table,{$athenaField|json_encode},{$crmField|json_encode});
            {/if}
        {/foreach}
        {foreach from=$mapping.mapping_rel key=relField item=info}
            {if $relField}
            addNewRelationship(false,table,{$relField|json_encode},{$info.main|json_encode},{$info.secondary|json_encode});
            {/if}
        {/foreach}
{/foreach}
    </script>