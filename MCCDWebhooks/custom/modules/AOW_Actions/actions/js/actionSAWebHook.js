function addHeader(line,name,val){
    var header = "<tr style='display: table-row;'>";
    header += "<td style='display: table-cell;'><input class='header_name' name='aow_actions_param["+line+"][header_name][]'/></td>";
    header += "<td style='display: table-cell;'><input class='header_val' name='aow_actions_param["+line+"][header_val][]'/></td>";
    header += "<td style='display: table-cell;'><input class='button' type='button' onclick='removeHeader(this);' value='-'/></td>";
    header += "</tr>";
    var headerRow = $(header);
    headerRow.find('.header_name').val(name);
    headerRow.find('.header_val').val(val);
    $("#aow_action_sawebhook_"+line+"_header_body").append(headerRow);
}
function removeHeader(e){
    $(e).closest("tr").remove();
}
function removeParameter(e){
    $(e).closest("tr").remove();
}

function addParameter(line, name, param_type, val){
    var parameter = "<tr style='display: table-row;'>";
    parameter += "<td style='display: table-cell;'><input class='parameter_name' name='aow_actions_param["+line+"][parameter_name][]'/></td>";
    parameter += "<td style='display: table-cell;'><select class='parameter_type' name='aow_actions_param["+line+"][parameter_type][]'>";
    parameter += "<option value='static'>Static</option>";
    parameter += "<option value='field'>Field</option>";
    parameter += "<option value='format'>Format</option>";
    parameter += "</select></td>";
    parameter += "<td style='display: table-cell;' class='param_fields_container'><select class='parameter_fields' name='aow_actions_param["+line+"][parameter_val][]'></select></td>";
    parameter += "<td style='display: table-cell;'><input class='button' type='button' onclick='removeParameter(this);' value='-'/></td>";
    parameter += "</tr>";

    var parameterRow = $(parameter);
    var param_type_elem = parameterRow.find('.parameter_type');
    parameterRow.find('.parameter_name').val(name);
    param_type_elem.val(param_type);
    $("#aow_action_sawebhook_"+line+"_parameter_body").append(parameterRow);
    param_type_elem.change(function(){
        var container = parameterRow.find(".param_fields_container");
        switch(param_type_elem.val()){
            case 'static':
                container.html("<input class='parameter_fields' name='aow_actions_param["+line+"][parameter_val][]' value='"+val+"'/>");
                break;
            case 'format':
                container.html("<textarea style='width: 200px' class='parameter_fields' name='aow_actions_param["+line+"][parameter_val][]'>"+val+"</textarea>");
                break;
            case 'field':
                container.html("<select class='parameter_fields' name='aow_actions_param["+line+"][parameter_val][]'></select>");
                $.get({
                    url: 'index.php',
                    data: {
                        module : 'AOW_WorkFlow',
                        action : 'getModuleFields',
                        aow_value : val,
                        aow_module : $('#flow_module').val()
                    },
                    success : function(e){
                        parameterRow.find('.parameter_fields').html(e);
                    }
                });
                break;
        }
    });
    param_type_elem.change();



}