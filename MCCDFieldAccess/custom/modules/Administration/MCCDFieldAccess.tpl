<h2>MCCD Field Access</h2>

<span>{$MOD.LBL_MCCDFIELDACCESS_HELP}</span>
<div role="alert" class="alert" id="field_access_save_message"></div>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_MCCDFIELDACCESS_MODULE}</span>
            </td>
            <td>
                <select id="mccdfieldaccess_module"
                       name='mccdfieldaccess[module]'>
                    {$moduleOptions}
                </select>
            </td>
        </tr>
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_MCCDFIELDACCESS_ROLE}</span>
            </td>
            <td>
                <select id="mccdfieldaccess_role"
                        name='mccdfieldaccess[role]'>
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
    var mccdFieldDirty = false;
    var lastMod = $('#mccdfieldaccess_module').val();
    var lastRole = $('#mccdfieldaccess_role').val();
    function displayRolePage(e){
        var module = $('#mccdfieldaccess_module').val();
        var role = $('#mccdfieldaccess_role').val();

        if(mccdFieldDirty){
            var ret = confirm("You have unsaved changes. Would you like to proceed without saving?");
            if(!ret){
                $('#mccdfieldaccess_module').val(lastMod);
                $('#mccdfieldaccess_role').val(lastRole);
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
                "action" : "MCCDFieldAccessPage",
                "to_pdf" : 1,
                "mccd_module" : module,
                "mccd_role" : role
            },
            function(){
                mccdFieldDirty = false
                $('.mccd_field_role').change(function(){
                    mccdFieldDirty = true;
                });
            }
        );
    }
    function saveFieldAccess(){
        var module = $('#mccdfieldaccess_module').val();
        var role = $('#mccdfieldaccess_role').val();
        $.post("index.php",
            {
                "action" : "MCCDFieldAccessSave",
                "module" : "Administration",
                "fields_edit" : $('.mccd_field_role_edit').serializeArray(),
                "fields_view" : $('.mccd_field_role_view').serializeArray(),
                "to_pdf" : 1,
                "mccd_module" : module,
                "mccd_role" : role

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
                    mccdFieldDirty = false
                }
                message.get(0).scrollIntoView(false);
            },
            "JSON"
        );
    }
    $(document).ready(function(){
        $('#mccdfieldaccess_module').change(displayRolePage);
        $('#mccdfieldaccess_role').change(displayRolePage);
    });
</script>
{/literal}