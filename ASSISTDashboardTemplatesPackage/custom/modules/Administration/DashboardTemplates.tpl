<h2>Dashboard Templates</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=DashboardTemplates&do=save">
<h2>{$MOD.LBL_CURRENT_TEMPLATES}</h2>
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <th>{$MOD.LBL_TEMPLATE_NAME}</th>
            <th>{$MOD.LBL_TEMPLATE_COPY_USER}</th>
            <th>{$MOD.LBL_TEMPLATE_MODIFIED}</th>
        </tr>
        {if $templates}
            {foreach from=$templates item=template}
                <tr>
                    <td>
                        {$template.name}
                    </td>
                    <td>
                        {$template.user_name}
                    </td>
                    <td>
                        {$template.date_modified}
                    </td>
                </tr>
            {/foreach}

        {else}
            <tr>
                <td class="error">
                    No templates added.
                </td>
            </tr>
        {/if}
    </table>


    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                <button id="newTemplateButton" class="button" type="button" value="{$MOD.LBL_NEW_TEMPLATE}">{$MOD.LBL_NEW_TEMPLATE}</button>
            </td>
        </tr>
        <tr>
            <td>
                <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}"
                       onclick="document.location.href='index.php?module=Administration&action=index'"
                       class="button" type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  ">
            </td>
        </tr>
    </table>
</form>
<form style="display: none;" id="newTemplateForm" name="newTemplateForm" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=DashboardTemplates&do=save">
    <table  width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td><h3>{$MOD.LBL_NEW_TEMPLATE}</h3></td>
        </tr>
        <tr>
            <td>{$MOD.LBL_TEMPLATE_NAME}</td>
            <td>
                <input id="template_name" name="template_name"/><br>
            </td>
        </tr>
        <tr>
            <td>{$MOD.LBL_TEMPLATE_COPY_USER}</td>
            <td>
                <input type="text" name="template_user_name" class="sqsEnabled yui-ac-input" tabindex="0" id="template_user_name" size="" value="" title="" autocomplete="off"><div id="newTemplateForm_template_user_name_results" class="yui-ac-container"><div class="yui-ac-content" style="display: none;"><div class="yui-ac-hd" style="display: none;"></div><div class="yui-ac-bd"><ul><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li></ul></div><div class="yui-ac-ft" style="display: none;"></div></div></div>
                <input type="hidden" name="template_user_id" id="template_user_id" value="">
                <span class="id-ff multiple">
                  {literal}
                    <button type="button" name="btn_template_user_name" id="btn_template_user_name" tabindex="0" title="Select User" class="button firstChild" value="Select User" onclick="open_popup(
                        &quot;Users&quot;,
                        600,
                        400,
                        &quot;&quot;,
                        true,
                        false,
                        {&quot;call_back_function&quot;:&quot;set_return&quot;,&quot;form_name&quot;:&quot;newTemplateForm&quot;,&quot;field_to_name_array&quot;:{&quot;id&quot;:&quot;template_user_id&quot;,&quot;user_name&quot;:&quot;template_user_name&quot;}},
                        &quot;single&quot;,
                        true
                        );"><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_template_user_name" id="btn_clr_template_user_name" tabindex="0" title="Clear User" class="button lastChild" onclick="SUGAR.clearRelateField(this.form, 'template_user_name', 'template_user_id');" value="Clear User"><span class="suitepicon suitepicon-action-clear"></span></button>
                </span>
                <script type="text/javascript">
                    SUGAR.util.doWhen(
                        "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['newTemplateForm_template_user_name']) != 'undefined'",
                        enableQS
                    );
                </script>
                {/literal}
            </td>
        </tr>
    </table>
</form>
<script>
{literal}
$(document).ready(function(){
    $('#closeTemplateButton').click(function(){
        $('#newTemplateForm').dialog();
    });
    $('#newTemplateButton').click(function(){
        $('#newTemplateForm').dialog({
                resizable: false,
                height: "auto",
                width: 500,
                modal: true,
                closeText: "",
                buttons: [
                    {
                        class : "button",
                        text: "Save",
                        click : saveTemplate
                    },
                    {
                        class : "button",
                        text : "Cancel",
                        click: function () {
                            $(this).dialog("close");
                        }
                    }
                ]

            }
        );
    });

    function saveTemplate(){
        var has_error = false;
        clear_all_errors();
        if(!$('#template_name').val()){
            add_error_style('newTemplateForm','template_name','{/literal}{$MOD.LBL_TEMPLATE_NAME}{literal} required');
            has_error = true;
        }
        if(!$('#template_user_id').val()){
            add_error_style('newTemplateForm','template_user_name','{/literal}{$MOD.LBL_TEMPLATE_COPY_USER}{literal} required');
            has_error = true;
        }
        if(!has_error){
            $('#newTemplateForm').submit();
        }
    };
});

{/literal}
</script>