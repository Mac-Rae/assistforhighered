<div class="panel">
<table>
    <tr>
        <th>
            {$MOD.LBL_ASSISTFIELDACCESS_FIELD}
        </th>
        <th>
            {$MOD.LBL_ASSISTFIELDACCESS_EDIT}
        </th>
        <th>
            {$MOD.LBL_ASSISTFIELDACCESS_VIEW}
        </th>
    </tr>
{foreach from=$fields item=field}
    <tr>
        <td>
            {$field.actual_label}
        </td>
        <td>
            <select name="{$field.name}_role_edit" class="assist_field_role_edit">
                {$field.assist_field_access_options_edit}
            </select>
        </td>
        <td>
            <select name="{$field.name}_role_view" class="assist_field_role_view">
                {$field.assist_field_access_options_view}
            </select>
        </td>
    </tr>
{/foreach}
    <tr>
        <td>
            <input id='field_access_save' onclick="saveFieldAccess();return false;" type="button" value="Save"/>
        </td>
    </tr>
</table>
</div>