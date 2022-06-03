
<div class="row edit-view-row">
<div class="col-xs-12 col-sm-6 edit-view-row-item">
    <div class="col-xs-12 col-sm-4 label"><label>{$ACTIONMOD.LBL_SAWEBHOOKS_URL}</label></div>
    <div class="col-xs-12 col-sm-8 edit-view-field  yui-ac"><input name="aow_actions_param[{$line}][url]" value="{$params.url}"/></div>
</div>
</div>
<div class="row edit-view-row">
    <div class="col-xs-12 col-sm-6 edit-view-row-item">
        <div class="col-xs-12 col-sm-4 label" ><label>{$ACTIONMOD.LBL_SAWEBHOOKS_METHOD}</label></div>
        <div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name">
            <select name="aow_actions_param[{$line}][method]">
                {$methodOptions}
            </select>
        </div>
        <!-- [/hide] -->
    </div>
</div>
<div class="row edit-view-row">
    <div class="col-xs-12 col-sm-6 edit-view-row-item">
        <div class="col-xs-12 col-sm-4 label" ><label>{$ACTIONMOD.LBL_SAWEBHOOKS_PARAMETERFORMAT}</label></div>
        <div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name">
            <select name="aow_actions_param[{$line}][format]">
                {$formatOptions}
            </select>
        </div>
        <!-- [/hide] -->
    </div>
</div>
<div class="row edit-view-row">
    <div class="col-xs-12 col-sm-6 edit-view-row-item">
        <div class="col-xs-12 col-sm-4 label" ><label>{$ACTIONMOD.LBL_SAWEBHOOKS_DESCRIPTION}</label></div>
        <div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name">
            <textarea name="aow_actions_param[{$line}][description]">
{$params.description}
</textarea>
        </div>
        <!-- [/hide] -->
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-6 edit-view-row-item">
        <h3>{$ACTIONMOD.LBL_SAWEBHOOKS_HEADERS}</h3>
        <table  class="table-responsive" style="width: 50%;">
            <thead>
            <tr style="display:table-row;">
                <th>{$ACTIONMOD.LBL_HEADERNAME}</th>
                <th>{$ACTIONMOD.LBL_HEADERVALUE}</th>
                <th></th>
            </tr>
            </thead>
            <tbody style="display: table-row-group;" id="aow_action_sawebhook_{$line}_header_body">
            </tbody>
        </table>
     <input class="button" onclick="addHeader({$line});" id="aow_action_sawebhook_{$line}_add_header" type="button" value="{$ACTIONMOD.LBL_SAWEBHOOKS_ADD_HEADER}"/>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 edit-view-row-item">
    <h3>{$ACTIONMOD.LBL_SAWEBHOOKS_PARAMETERS}</h3>
        <table  class="table-responsive" style="width: 50%;">
    <thead>
    <tr style="display:table-row;">
        <th>{$ACTIONMOD.LBL_PARAMETERNAME}</th>
        <th>{$ACTIONMOD.LBL_PARAMETERTYPE}</th>
        <th>{$ACTIONMOD.LBL_PARAMETERVALUE}</th>
        <th></th>
    </tr>
    </thead>
    <tbody style="display: table-row-group;" id="aow_action_sawebhook_{$line}_parameter_body">


    </tbody>
</table>
<input class="button" onclick="addParameter({$line});" id="aow_action_sawebhook_{$line}_add_parameter" type="button" value="{$ACTIONMOD.LBL_SAWEBHOOKS_ADD_PARAMETER}"/>
    </div>
</div>
<script id ='aow_script{$line}'>
    {foreach from=$params.header_name item=value key=key}
    addHeader({$line},"{$value}","{$params.header_val[$key]}");
    {/foreach}

    {foreach from=$params.parameter_name item=value key=key}
    addParameter({$line},"{$value}",{$params.parameter_type[$key]|json_encode},{$params.parameter_val[$key]|json_encode});
    {/foreach}
</script>