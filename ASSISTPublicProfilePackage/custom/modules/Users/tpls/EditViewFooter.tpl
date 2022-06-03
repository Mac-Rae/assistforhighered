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
<!-- END METADATA GENERATED CONTENT -->

{{if $useTabs}}
<!-- include a closing div if the useTabs variable is set to true -->
</div>
{{/if}}
<div id="email_options">
    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <th align="left" scope="row" colspan="4">
                <h4>{$MOD.LBL_MAIL_OPTIONS_TITLE}</h4>
            </th>
        </tr>
        <tr>
            <td scope="row" width="17%">
                {$MOD.LBL_EMAIL}  {if $REQUIRED_EMAIL_ADDRESS}<span class="required"
                                                                    id="mandatory_email">{$APP.LBL_REQUIRED_SYMBOL}</span> {/if}
            </td>
            <td width="83%">
                {$NEW_EMAIL}
            </td>
        </tr>
        <tr id="email_options_link_type" style='display:{$HIDE_FOR_GROUP_AND_PORTAL}'>
            <td scope="row" width="17%">
                {$MOD.LBL_EMAIL_LINK_TYPE}:&nbsp;{sugar_help text=$MOD.LBL_EMAIL_LINK_TYPE_HELP WIDTH=450}
            </td>
            <td>
                <select id="email_link_type" name="email_link_type" tabindex='410'>
                    {$EMAIL_LINK_TYPE}
                </select>
            </td>
        </tr>

        <tr>
            <td scope="row" width="17%">{$MOD.LBL_EDITOR_TYPE}</td>
            <td width="83%">
                <select id="editor_type" name="editor_type" tabindex='410'>
                    {$EDITOR_TYPE}
                </select>
            </td>
        </tr>
    </table>
    {if $ID}
        <button class="button" id="settingsButton"
                onclick="SUGAR.email2.settings.showSettings(getUserEditViewUserId()); return false;"><img
                    src="themes/default/images/icon_email_settings.gif" align="absmiddle"
                    border="0"> {$APP.LBL_EMAIL_SETTINGS}</button>
    {/if}
</div>
</div>
<div class="user-tab-content">
    {if ($CHANGE_PWD) == '1'}
        <div id="generate_password">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
                <tr>
                    <td width='40%'>
                        <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                            <tr>
                                <th align="left" scope="row" colspan="4">
                                    <h4>{$MOD.LBL_CHANGE_PASSWORD_TITLE}</h4><br>
                                    {$ERROR_PASSWORD}
                                </th>
                            </tr>
                        </table>
                        <!-- hide field if user is admin that is not editing themselves -->
                        <div id='generate_password_old_password' {if ($IS_ADMIN && !$ADMIN_EDIT_SELF)} style='display:none' {/if}>

                            <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                                <tr>
                                    <td width='35%' scope="row">
                                        {$MOD.LBL_OLD_PASSWORD}
                                    </td>
                                    <td>
                                        <input name='old_password' id='old_password' type='password' tabindex='2'
                                               onkeyup="password_confirmation();" autocomplete="new-password">
                                    </td>
                                    <td width='40%'>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                            <tr>
                                <td width='35%' scope="row" snowrap>
                                    {$MOD.LBL_NEW_PASSWORD}
                                    <span class="required"
                                          id="mandatory_pwd">{if ($REQUIRED_PASSWORD)}{$APP.LBL_REQUIRED_SYMBOL}{/if}</span>
                                </td>
                                <td class='dataField'>

                                    <input name='new_password' id="new_password" type='password' tabindex='2'
                                           onkeyup="password_confirmation();newrules('{$PWDSETTINGS.minpwdlength}','{$PWDSETTINGS.maxpwdlength}','{$REGEX}');"/>
                                </td>
                                <td width='40%'>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width='35%'>
                                    {$MOD.LBL_CONFIRM_PASSWORD}
                                </td>
                                <td class='dataField'>
                                    <input name='confirm_new_password' id='confirm_pwd' style='' type='password'
                                           tabindex='2' onkeyup="password_confirmation();">
                                </td>
                                <td width='40%'>
                                    <div id="comfirm_pwd_match" class="error"
                                         style="display: none;">{$MOD.ERR_PASSWORD_MISMATCH}</div>
                                    {*<span id="ext-gen63" class="x-panel-header-text">
                                       Requirements
                                       <span id="Filter.1_help" onclick="return SUGAR.util.showHelpTips(this,help());">
                                           <img src="themes/default/images/help.gif"/>
                                       </span>
                                   </span>*}
                                </td>
                            </tr>
                            <tr>
                                <td class='dataLabel'></td>
                                <td class='dataField'></td>
                                </td>
                        </table>

                        <table width='17%' cellspacing='0' cellpadding='1' border='0'>
                            <tr>
                                <td width='50%'>
                                    <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey='{$APP.LBL_SAVE_BUTTON_KEY}'
                                           class='button' id='save_new_pwd_button' LANGUAGE=javascript
                                           onclick='if (set_password(this.form)) window.close(); else return false;'
                                           type='submit' name='button' style='display:none;'
                                           value='{$APP.LBL_SAVE_BUTTON_LABEL}'>
                                </td>
                                <td width='50%'>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width='60%' style="vertical-align:middle;">
                    </td>
                </tr>
            </table>
        </div>
    {else}
        <div id="generate_password">
            <input name='old_password' id='old_password' type='hidden'>
            <input name='new_password' id="new_password" type='hidden'>
            <input name='confirm_new_password' id='confirm_pwd' type='hidden'>
        </div>
    {/if}
</div>
{if $SHOW_THEMES}
    <div class="user-tab-content">
        <div id="themepicker" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
            <table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                    <td scope="row" colspan="4"><h4>{$MOD.LBL_THEME}</h4></td>
                </tr>
                <tr>
                    <td width="17%">
                        <select name="user_theme" tabindex='366' size="20" id="user_theme_picker" style="width: 100%">
                            {$THEMES}
                        </select>
                    </td>
                    <td width="33%">
                        <img id="themePreview" src="{sugar_getimagepath file='themePreview.png'}" border="1"/>
                    </td>
                    <td width="17%">&nbsp;</td>
                    <td width="33%">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
{/if}
<div class="user-tab-content">
    <div id="settings" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">

            <tr>
                <th width="100%" align="left" scope="row" colspan="4">
                    <h4>
                        <slot>{$MOD.LBL_USER_SETTINGS}</slot>
                    </h4>
                </th>
            </tr>
            <tr>
                <td scope="row" valign="top">
                    <slot>{$MOD.LBL_EXPORT_DELIMITER}:</slot>&nbsp;{sugar_help text=$MOD.LBL_EXPORT_DELIMITER_DESC }
                </td>
                <td>
                    <slot><input type="text" tabindex='12' name="export_delimiter" value="{$EXPORT_DELIMITER}" size="5">
                    </slot>
                </td>
                <td scope="row" width="17%">
                    <slot>{$MOD.LBL_RECEIVE_NOTIFICATIONS}:
                    </slot>&nbsp;{sugar_help text=$MOD.LBL_RECEIVE_NOTIFICATIONS_TEXT}
                </td>
                <td width="33%">
                    <slot><input name='receive_notifications' class="checkbox" tabindex='12' type="checkbox"
                                 value="12" {$RECEIVE_NOTIFICATIONS}></slot>
                </td>
            </tr>

            <tr>
                <td scope="row" valign="top">
                    <slot>{$MOD.LBL_EXPORT_CHARSET}:</slot>&nbsp;{sugar_help text=$MOD.LBL_EXPORT_CHARSET_DESC }</td>
                <td>
                    <slot><select tabindex='12' name="default_export_charset">{$EXPORT_CHARSET}</select></slot>
                </td>
                <td scope="row" valign="top">
                    <slot>{$MOD.LBL_REMINDER}:</slot>&nbsp;{sugar_help text=$MOD.LBL_REMINDER_TEXT }
                </td>
                <td valign="top" nowrap>
                    <!--
                                <slot>{include file="modules/Meetings/tpls/reminders.tpl"}</slot>
								-->
                    <slot>{include file="modules/Reminders/tpls/remindersDefaults.tpl"}</slot>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" onClick="Alerts.prototype.enable()">
                        {$MOD.LBL_ENABLE_NOTIFICATIONS}
                    </button>
                </td>
            </tr>
            <tr>
                <td scope="row" valign="top">
                    <slot>{$MOD.LBL_USE_REAL_NAMES}:</slot>&nbsp;{sugar_help text=$MOD.LBL_USE_REAL_NAMES_DESC }</td>
                <td>
                    <slot><input tabindex='12' type="checkbox" name="use_real_names" {$USE_REAL_NAMES}></slot>
                </td>
                <td scope="row" valign="top">
                    <slot>{$MOD.LBL_MAILMERGE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_MAILMERGE_TEXT }
                </td>
                <td valign="top" nowrap>
                    <slot><input tabindex='12' name='mailmerge_on' class="checkbox" type="checkbox" {$MAILMERGE_ON}>
                    </slot>
                </td>
            </tr>
            <!--{if !empty($EXTERNAL_AUTH_CLASS) && !empty($IS_ADMIN)}-->
            <tr>
                {capture name=SMARTY_LBL_EXTERNAL_AUTH_ONLY}&nbsp;{$MOD.LBL_EXTERNAL_AUTH_ONLY} {$EXTERNAL_AUTH_CLASS_1}{/capture}
                <td scope="row" nowrap>
                    <slot>{$EXTERNAL_AUTH_CLASS} {$MOD.LBL_ONLY}:
                    </slot>&nbsp;{sugar_help text=$smarty.capture.SMARTY_LBL_EXTERNAL_AUTH_ONLY}</td>
                <td><input type='hidden' value='0' name='external_auth_only'><input type='checkbox' value='1'
                                                                                    name='external_auth_only' {$EXTERNAL_AUTH_ONLY_CHECKED}>
                </td>
                <td></td>
                <td></td>
            </tr>
            <!--{/if}-->
        </table>
    </div>
    <div id="locale" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
            <tr>
                <th width="100%" align="left" scope="row" colspan="4">
                    <h4>
                        <slot>{$MOD.LBL_USER_LOCALE}</slot>
                    </h4>
                </th>
            </tr>
            <tr>
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_DATE_FORMAT}:</slot>&nbsp;{sugar_help text=$MOD.LBL_DATE_FORMAT_TEXT }</td>
                <td width="33%">
                    <slot><select tabindex='14' name='dateformat'>{$DATEOPTIONS}</select></slot>
                </td>
                <!-- END: prompttz -->
                <!-- BEGIN: currency -->
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_CURRENCY}:</slot>&nbsp;{sugar_help text=$MOD.LBL_CURRENCY_TEXT }</td>
                <td>
                    <slot>
                        <select tabindex='14' id='currency_select' name='currency'
                                onchange='setSymbolValue(this.options[this.selectedIndex].value);setSigDigits();'>{$CURRENCY}</select>
                        <input type="hidden" id="symbol" value="">
                    </slot>
                </td>
                <!-- END: currency -->
            </tr>
            <tr>
                <td scope="row">
                    <slot>{$MOD.LBL_TIME_FORMAT}:</slot>&nbsp;{sugar_help text=$MOD.LBL_TIME_FORMAT_TEXT }</td>
                <td>
                    <slot><select tabindex='14' name='timeformat'>{$TIMEOPTIONS}</select></slot>
                </td>
                <!-- BEGIN: currency -->
                <td width="17%" scope="row">
                    <slot>
                        {$MOD.LBL_CURRENCY_SIG_DIGITS}:
                    </slot>
                </td>
                <td>
                    <slot>
                        <select id='sigDigits' onchange='setSigDigits(this.value);'
                                name='default_currency_significant_digits'>{$sigDigits}</select>
                    </slot>
                </td>
                <!-- END: currency -->
            </tr>
            <tr>
                <td scope="row">
                    <slot>{$MOD.LBL_TIMEZONE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_TIMEZONE_TEXT }</td>
                <td>
                    <slot><select tabindex='14'
                                  name='timezone'>{html_options options=$TIMEZONEOPTIONS selected=$TIMEZONE_CURRENT}</select>
                    </slot>
                </td>
                <!-- BEGIN: currency -->
                <td width="17%" scope="row">
                    <slot>
                        <i>{$MOD.LBL_LOCALE_EXAMPLE_NAME_FORMAT}</i>:
                    </slot>
                </td>
                <td>
                    <slot>
                        <input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
                    </slot>
                </td>
                <!-- END: currency -->
            </tr>
            <tr>
                {if ($IS_ADMIN)}
                    <td scope="row">
                        <slot>{$MOD.LBL_PROMPT_TIMEZONE}:</slot>&nbsp;{sugar_help text=$MOD.LBL_PROMPT_TIMEZONE_TEXT }
                    </td>
                    <td>
                        <slot><input type="checkbox" tabindex='14' class="checkbox" name="ut" value="0" {$PROMPTTZ}>
                        </slot>
                    </td>
                {else}
                    <td scope="row">
                        <slot>
                    </td>
                    <td>
                        <slot></slot>
                    </td>
                {/if}
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_NUMBER_GROUPING_SEP}:
                    </slot>&nbsp;{sugar_help text=$MOD.LBL_NUMBER_GROUPING_SEP_TEXT }</td>
                <td>
                    <slot>
                        <input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
                               type='text' maxlength='1' size='1' value='{$NUM_GRP_SEP}'
                               onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
                    </slot>
                </td>
            </tr>
            {capture name=SMARTY_LOCALE_NAME_FORMAT_DESC}&nbsp;{$MOD.LBL_LOCALE_NAME_FORMAT_DESC}{/capture}
            <tr>
                <td scope="row" valign="top">{$MOD.LBL_LOCALE_DEFAULT_NAME_FORMAT}
                    :&nbsp;{sugar_help text=$smarty.capture.SMARTY_LOCALE_NAME_FORMAT_DESC }</td>
                <td valign="top">
                    <slot><select tabindex='14' id="default_locale_name_format" name="default_locale_name_format"
                                  selected="{$default_locale_name_format}">{$NAMEOPTIONS}</select></slot>
                </td>
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_DECIMAL_SEP}:</slot>&nbsp;{sugar_help text=$MOD.LBL_DECIMAL_SEP_TEXT }</td>
                <td>
                    <slot>
                        <input tabindex='14' name='dec_sep' id='default_decimal_seperator'
                               type='text' maxlength='1' size='1' value='{$DEC_SEP}'
                               onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
                    </slot>
                </td>
            </tr>
        </table>
    </div>
    <div id="calendar_options" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
            <tr>
                <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_CALENDAR_OPTIONS}</h4></th>
            </tr>
            <tr>
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_PUBLISH_KEY}:</slot>&nbsp;{sugar_help text=$MOD.LBL_CHOOSE_A_KEY}</td>
                <td width="20%">
                    <slot><input id='calendar_publish_key' name='calendar_publish_key' tabindex='17' size='25'
                                 maxlength='36' type="text" value="{$CALENDAR_PUBLISH_KEY}"></slot>
                </td>
                <td width="63%">
                    <slot>&nbsp;</slot>
                </td>
            </tr>
            <tr>
                <td width="15%" scope="row">
                    <slot>
                        <nobr>{$MOD.LBL_YOUR_PUBLISH_URL|strip_semicolon}:</nobr>
                    </slot>
                </td>
                <td colspan=2><span class="calendar_publish_ok">{$CALENDAR_PUBLISH_URL}</span><span
                            class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
            </tr>
            <tr>
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_SEARCH_URL|strip_semicolon}:</slot>
                </td>
                <td colspan=2><span class="calendar_publish_ok">{$CALENDAR_SEARCH_URL}</span><span
                            class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
            </tr>
            <tr>
                <td width="15%" scope="row">
                    <slot>{$MOD.LBL_ICAL_PUB_URL|strip_semicolon}: {sugar_help text=$MOD.LBL_ICAL_PUB_URL_HELP}</slot>
                </td>
                <td colspan=2><span class="calendar_publish_ok">{$CALENDAR_ICAL_URL}</span><span
                            class="calendar_publish_none" style="display: none">{$MOD.LBL_NO_KEY}</span></td>
            </tr>
            <tr>
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_FDOW}:</slot>&nbsp;{sugar_help text=$MOD.LBL_FDOW_TEXT}</td>
                <td>
                    <slot>
                        <select tabindex='14'
                                name='fdow'>{html_options options=$FDOWOPTIONS selected=$FDOWCURRENT}</select>
                    </slot>
                </td>
            </tr>
        </table>
    </div>
    <div id="google_options" style="display:{$HIDE_IF_GAUTH_UNCONFIGURED}">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
            <tr>
                <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_GOOGLE_API_SETTINGS}</h4></th>
            </tr>
            <tr>
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_GOOGLE_API_TOKEN}:</slot>&nbsp;{sugar_help text=$MOD.LBL_GOOGLE_API_TOKEN_HELP}
                </td>
                    <td width="20%">
                    <slot>Current API Token is: <span style="color:{$GOOGLE_API_TOKEN_COLOR}">{$GOOGLE_API_TOKEN}</span> &nbsp;&nbsp;<input style="display:{$GOOGLE_API_TOKEN_ENABLE_NEW}" class="btn btn-primary btn-sm" id="google_gettoken" type="button" value="{$GOOGLE_API_TOKEN_BTN}" onclick="window.open('{$GOOGLE_API_TOKEN_NEW_URL}', '_self')" /></slot>
                </td>
                <td width="63%">
                    <slot>&nbsp;</slot>
                </td>
            </tr>
            <tr>
                <td width="17%" scope="row">
                    <slot>{$MOD.LBL_GSYNC_CAL}:</slot>
                </td>
                <td>
                    <slot><input tabindex='12' name='gsync_cal' class="checkbox" type="checkbox" {$GSYNC_CAL}></slot>
                </td>
            </tr>
        </table>
    </div>
</div>
{if $ID}
    <div id="eapm_area" style='display:{$HIDE_FOR_GROUP_AND_PORTAL};' class="user-tab-content">
        <div style="text-align:center; width: 100%">{sugar_getimage name="loading"}</div>
    </div>
{/if}
<div class="user-tab-content">
    <div id="subthemes" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_LAYOUT_OPTIONS}</h4></th>
                </tr>
                {if $SUBTHEMES}
                    <tr>
                        <td>
                            <span>{$MOD.LBL_SUBTHEME}:</span>
                        </td>
                        <td>
                            {html_options name=subtheme options=$SUBTHEMES selected=$SUBTHEME}
                        </td>
                    <tr>
                {/if}
                <tr id="use_group_tabs_row" style="display: {$DISPLAY_GROUP_TAB};">
                    <td scope="row"><span>{$MOD.LBL_USE_GROUP_TABS}
                            :</span>&nbsp;{sugar_help text=$MOD.LBL_NAVIGATION_PARADIGM_DESCRIPTION }</td>
                    <td colspan="3"><input name="use_group_tabs" type="hidden" value="m"><input id="use_group_tabs"
                                                                                                type="checkbox"
                                                                                                name="use_group_tabs" {$USE_GROUP_TABS}
                                                                                                tabindex='12' value="gm">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td scope="row" align="left" style="padding-bottom: 2em;">{$TAB_CHOOSER}</td>
                                <td width="90%" valign="top"><BR>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="17%" scope="row"><span>{$MOD.LBL_SORT_MODULES}
                            :</span>&nbsp;{sugar_help text=$MOD.LBL_SORT_MODULES_DESCRIPTION }</td>
                    <td width="83%" colspan="3">
                        <input type="checkbox" name="sort_modules_by_name" {$SORT_MODULES_BY_NAME} tabindex='13'>
                   </td>
                </tr>
                <tr>
                    <td width="17%" scope="row"><span>{$MOD.LBL_SUBPANEL_TABS}
                            :</span>&nbsp;{sugar_help text=$MOD.LBL_SUBPANEL_TABS_DESCRIPTION }</td>
                    <td width="83%" colspan="3"><input type="checkbox" name="user_subpanel_tabs" {$SUBPANEL_TABS}
                                                       tabindex='13'></td>
                </tr>
                <tr>
                    <td width="17%" scope="row"><span>{$MOD.LBL_COUNT_COLLAPSED_SUBPANELS}
                            :</span>&nbsp;{sugar_help text=$MOD.LBL_COUNT_COLLAPSED_SUBPANELS_DESCRIPTION }</td>
                    <td width="83%" colspan="3"><input type="checkbox" name="user_count_collapsed_subpanels" {$COUNT_COLLAPSED_SUBPANELS}
                                                       tabindex='13'></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


{if $allowPublicProfile}
<div class="user-tab-content">
    <div id="publicprofile" style="display:{$HIDE_FOR_GROUP_AND_PORTAL}">
        <div>
            <span>{$MOD.LBL_ENABLE_PUBLIC_PROFILE}: <input name="public_profile_enable" type="hidden" value="0">
                        <input id="public_profile_enable"
                            type="checkbox"
                            name="public_profile_enable" {if $public_profile_enable}checked="checked"{/if}
                            value="1"></span><br>
                            <input name="public_profile_use_vanity" type="hidden" value="0">
            {if $allowPublicProfile}
            <span>{$MOD.LBL_PUBLIC_PROFILE_USE_VANITY}: <input type="checkbox" id="public_profile_use_vanity" name="public_profile_use_vanity" {if $public_profile_use_vanity}checked="checked"{/if} value="1"/></span><br>
            <span id="public_profile_vanity_url_container" style="display: none;">{$MOD.LBL_PUBLIC_PROFILE_VANITY_URL}: <input type="text"  id="public_profile_value_vanity_url" name="public_profile_value_vanity_url" value="{$public_profile_value_vanity_url}"/></span>
            {else}
                <input type="hidden"  id="public_profile_value_vanity_url" name="public_profile_value_vanity_url"/>
            {/if}
            <br>
            <span>{$MOD.LBL_PUBLIC_PROFILE_URL}: <span id="public_profile_url_preview"><a target="_blank" rel="noopener noreferrer" href="{$public_profile_url}">{$public_profile_url}</a></span></span>
        </div>

        <table class="edit view" border="0" cellpadding="0" cellspacing="0" width="50%">
            <thead>
                <tr>
                    <th>{$MOD.LBL_PUBLIC_PROFILE_DISPLAY}</th>
                    <th></th>
                    <th></th>
                    <th>{$MOD.LBL_PUBLIC_PROFILE_DISPLAY}</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input name="public_profile_show_photo" type="hidden" value="0">
                        <input id="public_profile_show_photo"
                            type="checkbox"
                            name="public_profile_show_photo" {if $public_profile_show_photo}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_PHOTO}</span>
                    </td>
                    <td>
                    {if $public_profile_photo_name}
                        <a id="public_profile_photo_anchor" href="{$public_profile_photo_link}">{$public_profile_photo_name}</a>
                        <input style="display: none;" type="file" id="public_profile_value_photo" name="public_profile_value_photo"/>
                        <input type="hidden" name="public_profile_photo_remove_photo" id="public_profile_photo_remove_photo" value="0"/>
                        <input
                            type="button"
                            class="button"
                            id="remove_public_profile_photo_button" value="Remove"
                            onclick="removePublicProfilePhoto();">
                    {else}
                        <input type="file" name="public_profile_value_photo"/>
                    {/if}
                    {literal}
                    <script>
                        function removePublicProfilePhoto(){
                            $('#public_profile_photo_anchor').remove();
                            $('#public_profile_value_photo').show();
                            $('#remove_public_profile_photo_button').remove();
                            $('#public_profile_photo_remove_photo').val(1);
                        }
                    </script>
                    {/literal}
                    </td>

                    <td>
                        <input name="public_profile_show_business_days" type="hidden" value="0">
                        <input id="public_profile_show_business_days"
                            type="checkbox"
                            name="public_profile_show_business_days" {if $public_profile_show_business_days}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_BUSINESS_DAYS}</span>
                    </td>
                    <td>
                        <table>
                            <tr>
                            {foreach from=$days item=day}
                                <th style="text-align: center;">{$day|ucwords|substr:0:3}</th>
                            {/foreach}
                            </tr>
                            <tr>
                            {foreach from=$days item=day}
                            <td>
                                <input type="hidden" name="public_profile_value_business_days_{$day}" value="0"/>
                                <input type="checkbox" name="public_profile_value_business_days_{$day}" {if $public_profile_value_business_days[$day]}checked="checked"{/if} value="1"/>
                            </td>
                            {/foreach}
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td >
                        <input name="public_profile_show_first_name" type="hidden" value="0">
                        <input id="public_profile_show_first_name"
                            type="checkbox"
                            name="public_profile_show_first_name" {if $public_profile_show_first_name}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_FIRST_NAME}</span></td>
                    <td>
                        <input name="public_profile_value_first_name" value="{$public_profile_value_first_name}"/>
                    </td>

                    <td>
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_BUSINESS_HOURS_START}</span>
                    </td>
                    <td>
                        <select name="public_profile_value_business_hours_start_hours">
                            {$businessHoursStartHours}
                        </select>
                        :
                        <select name="public_profile_value_business_hours_start_minutes">
                            {$businessHoursStartMinutes}
                        </select>
                    </td>

                </tr>

                <tr>
                    <td >
                        <input name="public_profile_show_last_name" type="hidden" value="0">
                        <input id="public_profile_show_last_name"
                            type="checkbox"
                            name="public_profile_show_last_name" {if $public_profile_show_last_name}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_LAST_NAME}</span></td>
                    <td><input name="public_profile_value_last_name" value="{$public_profile_value_last_name}"/></td>

                    <td>
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_BUSINESS_HOURS_END}</span>
                    </td>
                    <td>
                        <select name="public_profile_value_business_hours_end_hours">
                            {$businessHoursEndHours}
                        </select>
                        :
                        <select name="public_profile_value_business_hours_end_minutes">
                            {$businessHoursEndMinutes}
                        </select>
                    </td>
                </tr>

                <tr>
                    <td >
                        <input name="public_profile_show_title" type="hidden" value="0">
                        <input id="public_profile_show_title"
                            type="checkbox"
                            name="public_profile_show_title" {if $public_profile_show_title}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_TITLE}</span></td>
                    <td><input name="public_profile_value_title" value="{$public_profile_value_title}"/></td>
                    <td>
                        <input name="public_profile_show_meeting_days" type="hidden" value="0">
                        <input id="public_profile_show_meeting_days"
                            type="checkbox"
                            name="public_profile_show_meeting_days" {if $public_profile_show_meeting_days}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_MEETING_DAYS}</span>
                    </td>
                    <td>
                        <table>
                            <tr>
                            {foreach from=$days item=day}
                                <th style="text-align: center;">{$day|ucwords|substr:0:3}</th>
                            {/foreach}
                            </tr>
                            <tr>
                            {foreach from=$days item=day}
                            <td>
                                <input type="hidden" name="public_profile_value_meeting_days_{$day}" value="0"/>
                                <input type="checkbox" name="public_profile_value_meeting_days_{$day}" {if $public_profile_value_meeting_days[$day]}checked="checked"{/if} value="1"/>
                            </td>
                            {/foreach}
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr class="public_profile_meeting_length_row">
                    <td></td><td></td><td></td><td></td>
                    <td>
                    <span>{$MOD.LBL_PUBLIC_PROFILE_MEETING_LENGTH}</span>
                    </td>
                    <td>
                    <label>
                        <input type="radio" name="public_profile_value_meeting_length" {if $public_profile_value_meeting_length == 15}checked='checked'{/if} value="15"/>
                        15 {$MOD.LBL_PUBLIC_PROFILE_MEETING_LENGTH_MINS}
                    </label><br>
                    <label>
                        <input type="radio" name="public_profile_value_meeting_length" {if !$public_profile_value_meeting_length || $public_profile_value_meeting_length == 30}checked='checked'{/if}value="30"/>
                        30 {$MOD.LBL_PUBLIC_PROFILE_MEETING_LENGTH_MINS}
                    </label><br>
                    <label>
                        <input type="radio" name="public_profile_value_meeting_length" {if $public_profile_value_meeting_length == 45}checked='checked'{/if} value="45"/>
                        45 {$MOD.LBL_PUBLIC_PROFILE_MEETING_LENGTH_MINS}
                    </label><br>
                    <label>
                        <input type="radio" name="public_profile_value_meeting_length" {if $public_profile_value_meeting_length == 60}checked='checked'{/if} value="60"/>
                        60 {$MOD.LBL_PUBLIC_PROFILE_MEETING_LENGTH_MINS}
                    </label>
                    </td>
                </tr>
                <tr>
                    <td >
                        <input name="public_profile_show_department" type="hidden" value="0">
                        <input id="public_profile_show_department"
                            type="checkbox"
                            name="public_profile_show_department" {if $public_profile_show_department}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_DEPARTMENT}</span></td>
                    <td><input name="public_profile_value_department" value="{$public_profile_value_department}"/></td>
                    <td>
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_MEETING_HOURS_START}</span>
                    </td>
                    <td>
                        <select name="public_profile_value_meeting_hours_start_hours">
                            {$meetingHoursStartHours}
                        </select>
                        :
                        <select name="public_profile_value_meeting_hours_start_minutes">
                            {$meetingHoursStartMinutes}
                        </select>
                    </td>
                </tr>

                <tr>
                    <td >
                        <input name="public_profile_show_institution" type="hidden" value="0">
                        <input id="public_profile_show_institution"
                            type="checkbox"
                            name="public_profile_show_institution" {if $public_profile_show_institution}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_INSTITUTION}</span></td>
                    <td>
                        <input type="text" name="public_profile_value_institution_name" class="sqsEnabled yui-ac-input" tabindex="0" id="public_profile_value_institution_name" size="" value="{$public_profile_value_institution_name}" title="" autocomplete="off">
                        <input type="hidden" name="public_profile_value_institution_id" id="public_profile_value_institution_id" value="{$public_profile_value_institution_id}">
                        <span class="id-ff multiple">
                            <button type="button" name="btn_public_profile_value_institution_name" id="btn_public_profile_value_institution_name"
                                tabindex="0" title="Select Institution" class="button firstChild" value="Select Institution"
                                {literal}
                                onclick="open_popup(
                                        'SA_Institutions',
                                        600,
                                        400,
                                        '',
                                        true,
                                        false,
                                        {
                                            'call_back_function':'set_return',
                                            'form_name':'EditView',
                                            'field_to_name_array' :
                                                {
                                                    'id' : 'public_profile_value_institution_id',
                                                    'name' : 'public_profile_value_institution_name'
                                                }
                                        },
                                        'single',
                                        true
                        );">

                        <span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_public_profile_value_institution_name" id="btn_clr_public_profile_value_institution_name" tabindex="0" title="Clear Institution" class="button lastChild" onclick="SUGAR.clearRelateField(this.form, 'public_profile_value_institution_name', 'public_profile_value_institution_id');" value="Clear Institution"><span class="suitepicon suitepicon-action-clear"></span></button>
                        </span>
                        <script type="text/javascript">
                        SUGAR.util.doWhen(
                                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['EditView_public_profile_value_institution_name']) != 'undefined'",
                                enableQS
                        );
                        {/literal}
                        </script>
                    </td>
                    <td>
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_MEETING_HOURS_END}</span>
                    </td>
                    <td>
                    <select name="public_profile_value_meeting_hours_end_hours">
                            {$meetingHoursEndHours}
                        </select>
                        :
                        <select name="public_profile_value_meeting_hours_end_minutes">
                            {$meetingHoursEndMinutes}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td >
                        <input name="public_profile_show_email_address" type="hidden" value="0">
                        <input id="public_profile_show_email_address"
                            type="checkbox"
                            name="public_profile_show_email_address" {if $public_profile_show_email_address}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_EMAIL}</span></td>
                    <td><input type="email" name="public_profile_value_email_address" value="{$public_profile_value_email_address}"/></td>
                    <td>
                    </td>
                    <td scope="row">
                    </td>
                    <td>
                    </td>
                </tr>
<tr>
                    <td >
                        <input name="public_profile_show_webex" type="hidden" value="0">
                        <input id="public_profile_show_webex"
                            type="checkbox"
                            name="public_profile_show_webex" {if $public_profile_show_webex}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_WEBEX}</span></td>
                    <td><input name="public_profile_value_webex" value="{$public_profile_value_webex}"/></td>

                    <td >
                        <input name="public_profile_show_out_of_office" type="hidden" value="0">
                        <input id="public_profile_show_out_of_office"
                            type="checkbox"
                            name="public_profile_show_out_of_office" {if $public_profile_show_out_of_office}checked="checked"{/if}
                            value="1">
                    </td>
                     <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_OUT_OF_OFFICE}</span>
                    </td>
                    <td>
                        {literal}
                        <div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="public_profile_value_out_of_office_start">
                        {/literal}{$MOD.LBL_PUBLIC_PROFILE_OOO_START}{literal}:<br>
                            <span class="dateTime">
                                <input class="date_input"
                                autocomplete="off"
                                type="text"
                                name="public_profile_value_out_of_office_start"
                                id="public_profile_value_out_of_office_start"
                                value="{/literal}{$public_profile_value_out_of_office_start}{literal}"
                                title=""
                                tabindex="0"
                                size="11"
                                maxlength="10"
                                style="width:80%;">
                                <button
                                    type="button"
                                    id="public_profile_value_out_of_office_start_trigger"
                                    class="btn btn-danger"
                                    onclick="return false;">
                                    <span class="suitepicon suitepicon-module-calendar" alt="Enter Date"></span>
                                </button>
                            </span>
                            <script type="text/javascript">
                            Calendar.setup ({
                                inputField : "public_profile_value_out_of_office_start",
                                form : "EditView",
                                ifFormat : "%m/%d/%Y %H:%M",
                                daFormat : "%m/%d/%Y %H:%M",
                                button : "public_profile_value_out_of_office_start_trigger",
                                singleClick : true,
                                dateStr : "{/literal}{$public_profile_value_out_of_office_start}{literal}",
                                startWeekday: 0,
                                step : 1,
                                weekNumbers:false
                            });
                            </script>
                        </div>

                        <div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="public_profile_value_out_of_office_end">
                            {/literal}{$MOD.LBL_PUBLIC_PROFILE_OOO_END}{literal}:<br>
                            <span class="dateTime">
                                <input class="date_input"
                                autocomplete="off"
                                type="text"
                                name="public_profile_value_out_of_office_end"
                                id="public_profile_value_out_of_office_end"
                                value="{/literal}{$public_profile_value_out_of_office_end}{literal}"
                                title=""
                                tabindex="0"
                                size="11"
                                maxlength="10"
                                style="width:80%;">
                                <button
                                    type="button"
                                    id="public_profile_value_out_of_office_end_trigger"
                                    class="btn btn-danger"
                                    onclick="return false;">
                                    <span class="suitepicon suitepicon-module-calendar" alt="Enter Date"></span>
                                </button>
                            </span>
                            <script type="text/javascript">
                            Calendar.setup ({
                                inputField : "public_profile_value_out_of_office_end",
                                form : "EditView",
                                ifFormat : "%m/%d/%Y %H:%M",
                                daFormat : "%m/%d/%Y %H:%M",
                                button : "public_profile_value_out_of_office_end_trigger",
                                singleClick : true,
                                dateStr : "{/literal}{$public_profile_value_out_of_office_end}{literal}",
                                startWeekday: 0,
                                step : 1,
                                weekNumbers:false
                            });
                            </script>
                        </div>
                        {/literal}
                    </td>
                </tr>
<tr>
                    <td >
                        <input name="public_profile_show_linkedin" type="hidden" value="0">
                        <input id="public_profile_show_linkedin"
                            type="checkbox"
                            name="public_profile_show_linkedin" {if $public_profile_show_linkedin}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_LINKEDIN}</span></td>
                    <td><input name="public_profile_value_linkedin" value="{$public_profile_value_linkedin}"/></td>
                </tr>

<tr>
                    <td >
                        <input name="public_profile_show_twitter" type="hidden" value="0">
                        <input id="public_profile_show_twitter"
                            type="checkbox"
                            name="public_profile_show_twitter" {if $public_profile_show_twitter}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_TWITTER}</span></td>
                    <td><input name="public_profile_value_twitter" value="{$public_profile_value_twitter}"/></td>
                </tr>



<tr>
                    <td >
                        <input name="public_profile_show_biography" type="hidden" value="0">
                        <input id="public_profile_show_biography"
                            type="checkbox"
                            name="public_profile_show_biography" {if $public_profile_show_biography}checked="checked"{/if}
                            value="1">
                    </td>
                    <td scope="row">
                        <span>{$MOD.LBL_PUBLIC_PROFILE_SHOW_BIO}</span></td>
                    <td colspan="3"><textarea style="width: 100%" cols="60" rows="8" name="public_profile_value_biography">{$public_profile_value_biography}</textarea></td>
                </tr>
               <tr style="border-bottom:1px solid black">
    <td colspan="100%">Meeting Info</td>
  </tr>
    <tr>
        <td>
            <input name="public_profile_show_meeting_in_person" type="hidden" value="0">
            <input id="public_profile_show_meeting_in_person"
                    type="checkbox"
                    name="public_profile_show_meeting_in_person" {if $public_profile_show_meeting_in_person}checked="checked"{/if}
                    value="1">
        </td>
        <td scope="row">
            <span>{$MOD.LBL_PUBLIC_PROFILE_ENABLE_IN_PERSON_MEETINGS}</span>
        </td>
        <td>
            {$MOD.LBL_PUBLIC_PROFILE_VALUE_MEETING_IN_PERSON}
        </td>
        <td colspan="2">
            <textarea name="public_profile_value_meeting_in_person">{$public_profile_value_meeting_in_person}</textarea>
        </td>
    </tr>
    <tr>
        <td >
            <input name="public_profile_show_meeting_phone_call" type="hidden" value="0">
            <input id="public_profile_show_meeting_phone_call"
            type="checkbox"
            name="public_profile_show_meeting_phone_call" {if $public_profile_show_meeting_phone_call}checked="checked"{/if}
            value="1">
        </td>
        <td scope="row">
            <span>{$MOD.LBL_PUBLIC_PROFILE_ENABLE_PHONE_CALL_MEETINGS}</span>
        </td>
        <td>
            {$MOD.LBL_PUBLIC_PROFILE_VALUE_MEETING_PHONE_CALL}
        </td>
        <td>
            <input name="public_profile_value_meeting_phone_call" value="{$public_profile_value_meeting_phone_call}"/>
        </td>
    </tr>
    <tr>
        <td >
            <input name="public_profile_show_meeting_virtual" type="hidden" value="0">
            <input id="public_profile_show_meeting_virtual"
                type="checkbox"
                name="public_profile_show_meeting_virtual" {if $public_profile_show_meeting_virtual}checked="checked"{/if}
                value="1">
        </td>
        <td scope="row">
            <span>{$MOD.LBL_PUBLIC_PROFILE_ENABLE_VIRTUAL_MEETINGS}</span>
        </td>
        <td>
            {$MOD.LBL_PUBLIC_PROFILE_VALUE_MEETING_VIRTUAL}
        </td>
        <td>
            <input name="public_profile_value_meeting_virtual" value="{$public_profile_value_meeting_virtual}"/>
        </td>
    </tr>
            </tbody>
        </table>
    </div>
</div>
{/if}

</div>

<script type="text/javascript">

  var mail_smtpport = '{$MAIL_SMTPPORT}';
  var mail_smtpssl = '{$MAIL_SMTPSSL}';
  {literal}
  EmailMan = {};

  function Admin_check() {
    if (('{/literal}{$IS_FOCUS_ADMIN}{literal}') && document.getElementById('is_admin').value == '0') {
      r = confirm('{/literal}{$MOD.LBL_CONFIRM_REGULAR_USER}{literal}');
      return r;
    }
    else
      return true;
  }


  $(document).ready(function () {
    var checkKey = function (key) {
      if (key != '') {
        $(".calendar_publish_ok").css('display', 'inline');
        $(".calendar_publish_none").css('display', 'none');
        $('#cal_pub_key_span').html(key);
        $('#ical_pub_key_span').html(key);
        $('#search_pub_key_span').html(key);
      } else {
        $(".calendar_publish_ok").css('display', 'none');
        $(".calendar_publish_none").css('display', 'inline');
      }
    };
    $('#calendar_publish_key').keyup(function () {
      checkKey($(this).val());
    });
    $('#calendar_publish_key').change(function () {
      checkKey($(this).val());
    });
    checkKey($('#calendar_publish_key').val());
  });
  {/literal}
</script>
{$JAVASCRIPT}
{literal}
<script type="text/javascript" language="Javascript">
    {/literal}
    {$getNameJs}
    {$getNumberJs}
    currencies = {$currencySymbolJSON};
    themeGroupList = {$themeGroupListJSON};

    onUserEditView();


</script>
<input type="hidden" id="is_public_profile_tab" name="is_public_profile_tab" value="0">
<script>

{literal}
function updateIsProfileTabField(){
    if(EditView_tabs.get('activeIndex') == 5){
        $('#is_public_profile_tab').val(1);
    }else{
        $('#is_public_profile_tab').val(0);
    }
}
$(document).ready(function(){
    var url = new URL(document.URL);
    var params = new URLSearchParams(url.search);
    if(params.get('show_public_profile')){
        EditView_tabs.selectTab(5);
    }
    updateIsProfileTabField();
    EditView_tabs.addListener('activeTabChange',updateIsProfileTabField);
    function validatePublicProfileFields(form,field){
        if($('[name='+field+"]").val()){
            return true;
        }
        var showString = field.replace("_value_","_show_");
        if(field == 'public_profile_value_institution_name'){
            showString = 'public_profile_show_institution';
        }else if(field == 'public_profile_value_out_of_office_start' || field == 'public_profile_value_out_of_office_end'){
            showString = 'public_profile_show_out_of_office';
        }else if(
            field == 'public_profile_value_meeting_hours_start_hours'
            || field == 'public_profile_value_meeting_hours_end_hours'
            || field == 'public_profile_value_meeting_hours_start_minutes'
            || field == 'public_profile_value_meeting_hours_end_minutes'
            ){
            showString = 'public_profile_show_meeting_days';
        }else if(
            field == 'public_profile_value_business_hours_start_hours'
            || field == 'public_profile_value_business_hours_end_hours'
            || field == 'public_profile_value_business_hours_start_minutes'
            || field == 'public_profile_value_business_hours_end_minutes'
            ){
            showString = 'public_profile_show_business_days';
        }
        if(!$('#'+showString).is(":checked")){
            return true;
        }
        return false;
    }
    addToValidateCallback("EditView","public_profile_value_first_name","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_last_name","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_title","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_department","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_institution_name","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_email_address","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_webex","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_linkedin","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_twitter","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_biography","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_live_chat","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_out_of_office_start","date",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_out_of_office_end","datetime",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_meeting_hours_start_hours","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_meeting_hours_end_hours","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_meeting_hours_start_minutes","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_meeting_hours_start_minutes","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_business_hours_start_hours","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_business_hours_end_hours","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_business_hours_start_minutes","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_business_hours_start_minutes","enum",false, 'Can\'t be displayed and empty',validatePublicProfileFields);

    addToValidateCallback("EditView","public_profile_value_meeting_in_person","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_meeting_phone_call","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);
    addToValidateCallback("EditView","public_profile_value_meeting_virtual","varchar",false, 'Can\'t be displayed and empty',validatePublicProfileFields);


    function validatePublicProfileVanityText(form,field){
        if($('#public_profile_use_vanity').is('checked')){
            return /^[a-zA-Z]+$/.test($('#'+field).val());
        }
        return true;
    }
    function validatePublicProfileVanityUnique(form,field){
        var vanity = $('#'+field).val();
        if(!vanity){
            return true;
        }
        var data = {
            'module' : 'SA_PublicProfile',
            'action' : 'checkVanityUnique',
            'vanity' : vanity,
            'to_pdf' : 1,
            'user' : '{/literal}{$ID}{literal}',
        };
        var ret = $.get({
            url: 'index.php',
            data: data,
            dataType : 'json',
            async:false
        });
        return ret.responseJSON;
    }
    {/literal}{if $allowPublicProfile}{literal}
    addToValidateCallback("EditView","public_profile_value_vanity_url","vanity_url",false, 'Vanity URL can only contain letters',validatePublicProfileVanityText);
    addToValidateCallback("EditView","public_profile_value_vanity_url","vanity_url",false, 'Vanity URL Taken',validatePublicProfileVanityUnique);
    {/literal}{/if}{literal}
    var meeting_days_checkbox = $('#public_profile_show_meeting_days');
    meeting_days_checkbox.change(function(){
        if(meeting_days_checkbox.is(":checked")){
            $('.public_profile_meeting_length_row').show();
        }else{
            $('.public_profile_meeting_length_row').hide();
        }
    });
    meeting_days_checkbox.change();

    var useVanity = $('#public_profile_use_vanity');
    var vanityURL = $('#public_profile_value_vanity_url');
    useVanity.change(function(){
        if(useVanity.is(":checked")){
            $('#public_profile_vanity_url_container').show();
        }else{
            $('#public_profile_vanity_url_container').hide();
        }
        vanityURL.change();
    });

   vanityURL.change(function(){
       var url = '';
        if(useVanity.is(":checked")){
            url = '{/literal}{$public_profile_url_vanity_base}{literal}/'+vanityURL.val();
        }else{
            url = '{/literal}{$public_profile_url}{literal}';
        }
        $('#public_profile_url_preview').html('<a target="_blank" rel="noopener noreferrer" href="'+url+'">'+url+'</a>');
    });
    useVanity.change();

});
{/literal}
</script>

</form>

<div id="testOutboundDialog" class="yui-hidden">
    <div id="testOutbound">
        <form>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
                <tr>
                    <td scope="row">
                        {$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR}
                        <span class="required">
						{$APP.LBL_REQUIRED_SYMBOL}
					</span>
                    </td>
                    <td>
                        <input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35"
                               maxlength="64" value="{$TEST_EMAIL_ADDRESS}">
                    </td>
                </tr>
                <tr>
                    <td scope="row" colspan="2">
                        <input type="button" class="button" value="   {$APP.LBL_EMAIL_SEND}   "
                               onclick="javascript:sendTestEmail();">&nbsp;
                        <input type="button" class="button" value="   {$APP.LBL_CANCEL_BUTTON_LABEL}   "
                               onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
{literal}
    <style>
        .actionsContainer.footer td {
            height: 120px;
            vertical-align: top;
        }
    </style>
{/literal}
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer footer">
    <tr>
        <td>
            {sugar_action_menu id="userEditActions" class="clickMenu fancymenu" buttons=$ACTION_BUTTON_FOOTER flat=true}
        </td>
        <td align="right" nowrap>
            <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
        </td>
    </tr>
</table>

        {if $showEmailSettingsPopup}
        <script>
            {literal}
            $(function(){
                SUGAR.email2.settings.showSettings();
            });
            {/literal}
        </script>
        {/if}