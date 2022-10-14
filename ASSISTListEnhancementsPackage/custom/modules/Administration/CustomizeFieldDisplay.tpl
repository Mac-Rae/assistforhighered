<h2>CustomizeFieldDisplay</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=CustomizeFieldDisplay&do=save">


    <table id="groupTable" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <button id="newLineButton" type="button" class="button">{$MOD.LBL_CUSTOMIZEFIELDDISPLAY_NEW_LINE}</button>
            </td>
        </tr>
        <tr id="headerRow">
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_NAME}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_MODULE}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_FIELD}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_ENABLE}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_LISTVIEW}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_DETAILVIEW}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_SUBPANEL}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_DASHLETS}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_COLOUR_BG}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_COLOUR_TEXT}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_COLOUR_LINK}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_CONDITION_OPERATOR}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_CONDITION_TYPE}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_CONDITION_VALUE}
            </th>
            <th>
                {$MOD.LBL_CUSTOMIZEFIELDDISPLAY_DELETE_RULE}
            </th>
        </tr>
    </table>
<br>
    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                <input title="{$APP.LBL_SAVE_BUTTON_TITLE}"
                       accessKey="{$APP.LBL_SAVE_BUTTON_KEY}"
                       class="button primary"
                       type="submit"
                       name="save"
                       onclick="return submitForm();"
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
    function submitForm(){
        if(!check_form('ConfigureSettings')){
            return false;
        }
        var checks = $('input[type=checkbox]:not(:checked)');
        checks.val(0);
        checks.prop("checked",true);
        return true;
    }
    function addNewLine(e,d){
        var index = $('.cfd_name').length - 1;
        var newLine = $('#lineTempl').clone();
        newLine.attr("id","cfd_"+index);
        $('#headerRow').after(newLine);
        var mod = newLine.find(".cfd_module");
        newLine.find(".cfd_name").attr("name","cfd_name["+index+"]");
        newLine.find(".cfd_enable").attr("name","cfd_enable["+index+"]");
        newLine.find(".cfd_list").attr("name","cfd_list["+index+"]");
        newLine.find(".cfd_detail").attr("name","cfd_detail["+index+"]");
        newLine.find(".cfd_subpanel").attr("name","cfd_subpanel["+index+"]");
        newLine.find(".cfd_dashlets").attr("name","cfd_dashlets["+index+"]");
        newLine.find(".cfd_bg_colour").attr("name","cfd_bg_colour["+index+"]");
        newLine.find(".cfd_text_colour").attr("name","cfd_text_colour["+index+"]");
        newLine.find(".cfd_link_colour").attr("name","cfd_link_colour["+index+"]");
        mod.attr("name","cfd_module["+index+"]");
        var field = newLine.find(".fieldOptions");
        field.attr("name","cfd_field["+index+"]");
        var operator = newLine.find(".operatorTD");
        var type = newLine.find(".operatorTD");
        newLine.find('.deleteRuleButton').click(function(){
            newLine.remove();
        });
        mod.change(function(){
            var data = {
                'module' : 'AOW_WorkFlow',
                'action' : 'getModuleFields',
                "aow_module" : mod.val(),
                "rel_field" : "",
                "aor_value" : ""
            };
            $.get("index.php",data,function(r){
                field.html(r);
                    if(d){
                        field.val(d['field']);
                        field.change();
                    }
                }
            );
        });

        field.change(function(){
            var data = {
                'module' : 'AOW_WorkFlow',
                'action' : 'getModuleOperatorField',
                "aow_module" : mod.val(),
                "aow_fieldname" : field.val(),
                "aow_newfieldname" : "cfd_operator["+index+"]"
            };
            $.get("index.php",data,function(r){
                newLine.find('.operatorTD').html(r);
                newLine.find('#cfd_operator\\['+index+'\\]').change(function(){
                    if(newLine.find('#cfd_operator\\['+index+'\\]').val() == 'is_null'){
                        newLine.find('.valueTD select').hide();
                        newLine.find('.typeTD select').hide();
                        newLine.find('.valueTD input').hide();
                        newLine.find('.valueTD textarea').hide();
                    }else{
                        newLine.find('.valueTD select').show();
                        newLine.find('.typeTD select').show();
                        newLine.find('.valueTD input').show();
                        newLine.find('.valueTD textarea').show();
                        newLine.find('#cfd_value\\['+index+'\\]\\[1\\]').change();
                    }
                });
                    if(d){
                        newLine.find('#cfd_operator\\['+index+'\\]').val(d['operator']);
                    }
                }
            );
            data = {
                'module' : 'AOW_WorkFlow',
                'action' : 'getFieldTypeOptions',
                "aow_module" : mod.val(),
                "aow_fieldname" : field.val(),
                "aow_newfieldname" : "cfd_type["+index+"]"
            };
            $.get("index.php",data,function(r){
                newLine.find('.typeTD').html(r);
                var typeField = newLine.find('#cfd_type\\['+index+'\\]');
                typeField.find("option[value='Any_Change']").remove();
                typeField.change(function(){
                    var val = '';
                    if(d){
                        val = d['value'];
                        if(Array.isArray(val) && typeField.val() == 'Date'){
                            val = JSON.stringify(val);
                        }
                    }
                    var data = {
                        'module' : 'AOW_WorkFlow',
                        'action' : 'getModuleFieldType',
                        "aow_module" : mod.val(),
                        "aow_fieldname" : field.val(),
                        'aow_value' : val,
                        "aow_newfieldname" : "cfd_value["+index+"]",
                        'aow_type' : newLine.find('#cfd_type\\['+index+'\\]').val()
                    };
                    $.get("index.php",data,function(r){
                            newLine.find('.valueTD').html(r);
                        }
                    );
                });
                    typeField.change();
                    if(d){
                        newLine.find('#cfd_type\\['+index+'\\]').val(d['type']);

                        newLine.find('#cfd_type\\['+index+'\\]').change();
                    }
                }
                );
            });




        if(d){
                newLine.find('.cfd_module').val(d['module']);
                newLine.find('.cfd_name').val(d['name']);


                newLine.find('.cfd_enable').prop('checked',d['enable'] == '1');
                newLine.find('.cfd_list').prop('checked',d['list'] == '1');
                newLine.find('.cfd_detail').prop('checked',d['detail'] == '1');
                newLine.find('.cfd_subpanel').prop('checked',d['subpanel'] == '1');
                newLine.find('.cfd_dashlets').prop('checked',d['dashlets'] == '1');

                newLine.find('.cfd_bg_colour').val(d['bg_colour']);
                newLine.find('.cfd_text_colour').val(d['text_colour']);
                newLine.find('.cfd_link_colour').val(d['link_colour']);
            }
        mod.change();
        //field.change();

    }

    $('#newLineButton').click(addNewLine);

    {/literal}
    var data = {$data|@json_encode};
    {literal}
    $(document).ready(function(){
        for(var x = 0; x < data.length;x++){
            addNewLine(null,data[x]);
        }
    });
    function date_field_change(field){
        console.log("Date field change "+field);
        if(document.getElementById(field + '[1]').value == 'now'){
            $(document.getElementById(field + '[2]')).hide();
            $(document.getElementById(field + '[3]')).hide();
        } else {
            $(document.getElementById(field + '[2]')).show();
            $(document.getElementById(field + '[3]')).show();
        }
    }
</script>
{/literal}
<table style="display: none;">
<tr id="lineTempl">
    <td><input type="text" class="cfd_name" name="cfd_name[]"></td>
    <td><select class="cfd_module" name="cfd_module[]">{$moduleOptions}</select></td>
    <td><select class="fieldOptions" name="cfd_field[]"></select></td>
    <td><input type="checkbox" checked="checked" value="1" class='cfd_enable' name="cfd_enable[]"/></td>
    <td><input type="checkbox" checked="checked" value="1" class='cfd_list' name="cfd_list[]"/></td>
    <td><input type="checkbox" checked="checked" value="1" class='cfd_detail' name="cfd_detail[]"/></td>
    <td><input type="checkbox" checked="checked" value="1" class='cfd_subpanel' name="cfd_subpanel[]"/></td>
    <td><input type="checkbox" checked="checked" value="1" class='cfd_dashlets' name="cfd_dashlets[]"/></td>
    <td><input type="color" class='cfd_bg_colour' name="cfd_bg_colour[]"></td>
    <td><input type="color" class='cfd_text_colour' name="cfd_text_colour[]"></td>
    <td><input type="color" class='cfd_link_colour' name="cfd_link_colour[]"></td>

    <td class="operatorTD"></td>
    <td class="typeTD"></td>
    <td class="valueTD"></td>

    <td><button type="button" class="button deleteRuleButton">X</button></td>
</tr>
</table>
