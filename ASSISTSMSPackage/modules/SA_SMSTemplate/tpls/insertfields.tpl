<select name='variable_module' tabindex="0" onchange="addVariables(document.EditView.variable_name,this.options[this.selectedIndex].value);">
    {$MODULE_DROPDOWN}
</select>
<select id="variable_name" name="variable_name" onchange="showVariable()"></select>
<input style="max-width: 200px" type="text" name="variable_text"/>
<input type='button' tabindex="0" onclick='insert_variable_text(document.EditView.description, document.EditView.variable_text.value);' class='button' value='{$MOD.LBL_INSERT}'>

<script>
    {$INSERT_FIELDS_JS}
    {literal}
    function showVariable(form) {
        if(!form) {
            form = 'EditView';
        }
        document[form].variable_text.value =
            document[form].variable_name.options[document[form].variable_name.selectedIndex].value;
    }
    function addVariables(the_select,the_module, form) {
        the_select.options.length = 0;
        for(var i=0;i<field_defs[the_module].length;i++) {
            var new_option = document.createElement("option");
            new_option.value = "$"+field_defs[the_module][i].name;
            new_option.text= field_defs[the_module][i].value;
            the_select.options.add(new_option,i);
        }
        showVariable(form);
    }

    function insert_variable_text(myField, myValue) {
        //IE support
        if (document.selection) {
            myField.focus();
            sel = document.selection.createRange();
            sel.text = myValue;
        }
        //MOZILLA/NETSCAPE support
        else if (myField.selectionStart || myField.selectionStart == '0') {
            var startPos = myField.selectionStart;
            var endPos = myField.selectionEnd;
            myField.value = myField.value.substring(0, startPos)
                + myValue
                + myField.value.substring(endPos, myField.value.length);
        } else {
            myField.value += myValue;
        }
    }

    $(document).ready(function(){
        $("[name=variable_module]").val("Contacts");
        addVariables(document.EditView.variable_name,'Contacts');
    });

    {/literal}

</script>