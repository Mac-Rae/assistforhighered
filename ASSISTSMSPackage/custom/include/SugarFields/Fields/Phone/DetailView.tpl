{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

*}
{assign var="vardef_name" value={{sugarvar key='name' string=true}} }
{assign var="assist_field_hidden" value={{sugarvar key='assist_field_hidden' string=true}} }
{if $assist_field_hidden}
    {include file='custom/include/SugarFields/Redacted.tpl' vardef={{$vardef.name}}}
{else}
{if !empty({{sugarvar key='value' string=true}})}
{assign var="phone_value" value={{sugarvar key='value' string=true}} }
{capture name="enable_sa_sms"}{sa_sms_enable vardef_name=$vardef_name optin=$fields.sms_opt_in_c.value module=$module number=$phone_value}{/capture}
{if $smarty.capture.enable_sa_sms}
    <script src='modules/SA_SMS/JS/util.js'></script>
    <a href="#" onclick="openSASMS('{$fields.id.value}', '{$module}', '{$phone_value}');"><span class="suitepicon suitepicon-admin-languages"></span></a>
{/if}
{sugar_phone value=$phone_value usa_format="{{if !empty($vardef.validate_usa_format)}}1{{else}}0{{/if}}"}

{{if !empty($displayParams.enableConnectors)}}
{{sugarvar_connector view='DetailView'}}
{{/if}}
{/if}
{/if}