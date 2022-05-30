<h2>AthenaConfig</h2>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=AthenaConfig&do=save">

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_SYNC_TYPE}</span>
            </td>
            <td>
                <select id="athenaconfig_sync_type"
                       name='assist_athena[sync_type]'>
                    {$syncTypes}
                </select>
            </td>
        </tr>
        <tr class="athena_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_ATHENA_CATALOG}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_athena_catalog"
                       name='assist_athena[athena_catalog]'
                       value='{$config.assist_athena.athena_catalog}'>
            </td>
        </tr>
        <tr class="athena_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_ATHENA_DATABASE}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_athena_database"
                       name='assist_athena[athena_database]'
                       value='{$config.assist_athena.athena_database}'>
            </td>
        </tr>
        <tr class="athena_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_ATHENA_QUERY_OUTPUT}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_athena_query_output"
                       name='assist_athena[athena_query_output]'
                       value='{$config.assist_athena.athena_query_output}'>
            </td>
        </tr>
        <tr class="athena_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_ATHENA_API_VERSION}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_api_version_athena"
                       name='assist_athena[api_version_athena]'
                       value='{$config.assist_athena.api_version_athena}'>
            </td>
        </tr>
        <tr class="rds_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_DATABASE}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_database"
                       name='assist_athena[database]'
                        value='{$config.assist_athena.database}'>
            </td>
        </tr>
        <tr class="rds_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_API_VERSION}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_api_version"
                       name='assist_athena[api_version]'
                        value='{$config.assist_athena.api_version}'>
            </td>
        </tr>
        <tr class="common_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_REGION}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_region"
                       name='assist_athena[region]'
                        value='{$config.assist_athena.region}'>
            </td>
        </tr>
        <tr class="common_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_KEY}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_key"
                       name='assist_athena[key]'
                        value='{$config.assist_athena.key}'>
            </td>
        </tr>
        <tr class="common_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_SECRET}</span>
            </td>
            <td>
                <button class="button" id="change_secret">{$MOD.LBL_ATHENACONFIG_SECRET_CHANGE}</button>
            </td>
        </tr>
        <tr class="rds_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_RESOURCE_ARN}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_resource_arn"
                       name='assist_athena[resource_arn]'
                       value='{$config.assist_athena.resource_arn}'>
            </td>
        </tr>
        <tr class="rds_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_SECRET_ARN}</span>
            </td>
            <td>
                <button class="button" id="change_secret_arn">{$MOD.LBL_ATHENACONFIG_SECRET_ARN_CHANGE}</button>
            </td>
        </tr>
        <tr class="db_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_HOST}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_db_host"
                       name='assist_athena[db_host]'
                       value='{$config.assist_athena.db_host}'>
            </td>
        </tr>
        <tr class="db_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_DB_SCHEMA}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_db_schema"
                       name='assist_athena[db_schema]'
                       value='{$config.assist_athena.db_schema}'>
            </td>
        </tr>
        <tr class="db_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_DB_PORT}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_db_port"
                       name='assist_athena[db_port]'
                       value='{$config.assist_athena.db_port}'>
            </td>
        </tr>
        <tr class="db_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_DB_USER}</span>
            </td>
            <td>
                <input type='text' size='20' id="athenaconfig_db_user"
                       name='assist_athena[db_user]'
                       value='{$config.assist_athena.db_user}'>
            </td>
        </tr>
        <tr class="db_row">
            <td scope="row">
                <span>{$MOD.LBL_ATHENACONFIG_DB_PWD}</span>
            </td>
            <td>
                <button class="button" id="change_db_pwd">{$MOD.LBL_ATHENACONFIG_DB_PWD_CHANGE}</button>
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
{literal}
    <script>
        $(document).ready(
            function(){
                var but = $('#change_secret');
                but.click(function(){
                    but.after("<input  autocomplete='off' type='text' id='athenaconfig_secret' name='assist_athena[secret]'>");
                    but.remove();
                });
                var but_arn = $('#change_secret_arn');
                but_arn.click(function(){
                    but_arn.after("<input  autocomplete='off' type='text' id='athenaconfig_secret_arn' name='assist_athena[secret_arn]'>");
                    but_arn.remove();
                });

                var but_pwd = $('#change_db_pwd');
                but_pwd.click(function(){
                    but_pwd.after("<input  autocomplete='off' type='text' id='athenaconfig_db_pwd' name='assist_athena[db_pwd]'>");
                    but_pwd.remove();
                });
                $('#athenaconfig_sync_type').change(function(){
                    if($('#athenaconfig_sync_type').val() == 'Athena'){
                        $('.athena_row').show();
                        $('.common_row').show();
                        $('.rds_row').hide();
                        $('.db_row').hide();
                    }else if($('#athenaconfig_sync_type').val() == 'RDS'){
                        $('.athena_row').hide();
                        $('.common_row').show();
                        $('.rds_row').show();
                        $('.db_row').hide();
                    }else{
                        $('.db_row').show();
                        $('.common_row').hide();
                        $('.athena_row').hide();
                        $('.rds_row').hide();
                    }
                });
                $('#athenaconfig_sync_type').change();
            }
        );

    </script>
{/literal}