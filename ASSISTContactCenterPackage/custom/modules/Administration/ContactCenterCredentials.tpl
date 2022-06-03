<h2>{$MOD.LBL_CONTACTCENTER_CONTACT_CENTERS_CREDENTIALS}</h2>

<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=ContactCenterCredentials&do=save">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
        <tr>
            <td>
                {$BUTTONS}
                 </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_GENERAL_SETTINGS}</h4></th>
        </tr>
        <tr>
            <td  scope="row" width="200">{$MOD.LBL_CONTACT_CENTER_AWS_KEY}: </td>
            <td  >
                <input type='text' id='contact_center_aws_key' name='contact_center_aws_key' value="{$config.contact_center_aws_key}" >
            </td>
        </tr>
        <tr>
            <td  scope="row" width="200">{$MOD.LBL_CONTACT_CENTER_AWS_SECRET}: </td>
            <td  >
                <button class="button" id="change_secret">{$MOD.LBL_CONTACT_CENTER_AWS_SECRET_CHANGE}</button>
            </td>
        </tr>
        <tr>
            <td  scope="row" width="200">{$MOD.LBL_CONTACT_CENTER_AWS_REGION}: </td>
            <td  >
                <input type='text' id='contact_center_aws_region' name='contact_center_aws_region' value="{$config.contact_center_aws_region}" >
            </td>
        </tr>
    </table>
    <div style="padding-top: 2px;">
        {$BUTTONS}
    </div>
    {$JAVASCRIPT}

    {literal}
    <script>
        $(document).ready(
            function(){
                var but = $('#change_secret');
                but.click(function(){
                    but.after("<input  autocomplete='off' type='text' id='contact_center_aws_secret' name='contact_center_aws_secret'>");
                    but.remove();
                });
            }
        );

    </script>
    {/literal}
</form>
