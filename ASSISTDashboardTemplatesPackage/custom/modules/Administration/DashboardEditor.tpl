<h2>DashboardEditor</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=DashboardEditor&do=save">

    <table style="width: 50%;" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <th>{$MOD.LBL_ASSISTDASHBOARDEDITOR_TARGET}</th>
            <th>{$MOD.LBL_ASSISTDASHBOARDEDITOR_DASHBOARD}</th>
        </tr>
        <tr id="buttonRow">
            <td>
                <button class="button" id="newLineButton" type="button" value="{$MOD.LBL_ASSISTDASHBOARDEDITOR_NEW_LINE}">{$MOD.LBL_ASSISTDASHBOARDEDITOR_NEW_LINE}</button>
            </td>
        </tr>
    </table>
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
<script>
    var lines = {$linesJSON};
    {literal}
    function removeLine(e){
        var target = $(e.target);
        target.closest('tr').remove();
    }
    function applyAll(e){
        var target = $(e.target);
        if(!confirm('{/literal}{$MOD.LBL_ASSISTDASHBOARDEDITOR_APPLY_ALL_CONFIRM}{literal}')){
            return;
        }
        $.post('index.php',{
            'module' : 'Administration',
            'to_pdf' : 1,
            'action' : 'assistApplyDashboardTemplates',
            'role' : target.closest('tr').find('.target_role').val(),
            'dashboard' : target.closest('tr').find('.dashboard').val()
        },function(d){
            if(d['success']){
                alert('{/literal}{$MOD.LBL_ASSISTDASHBOARDEDITOR_APPLY_ALL_SUCCESS}{literal}')
            }else{
                alert('{/literal}{$MOD.LBL_ASSISTDASHBOARDEDITOR_APPLY_ALL_ERROR}{literal}' + d['error']);
            }
        },'JSON');
    }
    function addLine(item){
        var newRow = $('#row_template').clone();
        if(item['dashboard']){
            newRow.find('.target_role').val(item['role']);
            newRow.find('.dashboard').val(item['dashboard']);
        }
        newRow.find(".removeLineButton").click(removeLine);
        newRow.find(".applyToAllButton").click(applyAll);

        $('#buttonRow').before(newRow);
    }
    $(document).ready(function(){
        for(var x = 0; x < lines.length; x++){
            addLine(lines[x]);
        }
        $('#newLineButton').click(addLine);
    });
    {/literal}
</script>

<table style="display: none;">
    <tr id="row_template">
        <td>
            <select
                    class='target_role' name='assist_dashboardtemplates[target_role][]'>
                {$roleOptions}
            </select>
        </td>
        <td>
            <select
                    class='dashboard' name='assist_dashboardtemplates[dashboard][]'>
                {$dashboardOptions}
            </select>
        </td>
        <td>
            <input
                    class="button primary applyToAllButton"
                    type="button"
                    value="{$MOD.LBL_ASSISTDASHBOARDEDITOR_APPLY_ALL}">
        </td>
        <td>
            <input
                   class="button primary removeLineButton"
                   type="button"
                   value="X">
        </td>
    </tr>
</table>