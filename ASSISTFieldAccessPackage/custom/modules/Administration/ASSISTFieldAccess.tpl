<h2>ASSIST Field Access</h2>

<span>{$MOD.LBL_ASSISTFIELDACCESS_HELP}</span>
<div role="alert" class="alert" id="field_access_save_message"></div>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTFIELDACCESS_MODULE}</span>
            </td>
            <td>
                <select id="assistfieldaccess_module"
                       name='assistfieldaccess[module]' tabindex="0">
                    {$moduleOptions}
                </select>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ASSISTFIELDACCESS_ROLE}</span>
            </td>
            <td>
                <select id="assistfieldaccess_role"
                        name='assistfieldaccess[role]' tabindex="0">
                    {$roleOptions}
                </select>
            </td>
        </tr>
    </table>
    <div id="rolePage"></div>

    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                &nbsp;
                <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}"
                       onclick="document.location.href='index.php?module=Administration&action=index'"
                       class="button" type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  ">
            </td>
        </tr>
    </table>
{literal}
<script>
    var assistFieldDirty = false;
    var lastMod = $('#assistfieldaccess_module').val();
    var lastRole = $('#assistfieldaccess_role').val();
    function displayRolePage(e){
        var module = $('#assistfieldaccess_module').val();
        var role = $('#assistfieldaccess_role').val();

        if(assistFieldDirty){
            var ret = confirm("You have unsaved changes. Would you like to proceed without saving?");
            if(!ret){
                $('#assistfieldaccess_module').val(lastMod);
                $('#assistfieldaccess_role').val(lastRole);
                return;
            }
        }
        if(!module || !role){
            $('#rolePage').empty();
            return;
        }
        lastMod = module;
        lastRole = role;
        $('#rolePage').load(
            "index.php",
            {
                "module" : "Administration",
                "action" : "ASSISTFieldAccessPage",
                "to_pdf" : 1,
                "assist_module" : module,
                "assist_role" : role
            },
            function(){
                assistFieldDirty = false
                $('.assist_field_role').change(function(){
                    assistFieldDirty = true;
                });
            }
        );
    }
    function saveFieldAccess(){
        var module = $('#assistfieldaccess_module').val();
        var role = $('#assistfieldaccess_role').val();
        $.post("index.php",
            {
                "action" : "ASSISTFieldAccessSave",
                "module" : "Administration",
                "fields_edit" : $('.assist_field_role_edit').serializeArray(),
                "fields_view" : $('.assist_field_role_view').serializeArray(),
                "to_pdf" : 1,
                "assist_module" : module,
                "assist_role" : role

            },
            function(d){
            var message = $('#field_access_save_message');
                if(d['error']){
                    message.removeClass('alert-success');
                    message.addClass('alert-danger');
                    message.text(d['error']);
                }else{
                    message.removeClass('alert-danger');
                    message.addClass('alert-success');
                    message.text(d['message']);
                    assistFieldDirty = false
                }
                message.get(0).scrollIntoView(false);
            },
            "JSON"
        );
    }
    $(document).ready(function(){
        $('#assistfieldaccess_module').change(displayRolePage);
        $('#assistfieldaccess_role').change(displayRolePage);
    });
</script>
{/literal}