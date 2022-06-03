
<div class="template-panel">
	<div class="template-panel-container panel">
		<div class="template-container-full">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th colspan="4" align="left" ><h4 class="header-4">{$MOD.LBL_WIZ_assist_CASE_DETAILS}</h4></th>
				</tr>

				<tr>
					<td scope="col"><span sugar='slot14'>{$MOD.LBL_ASSIST_CASE_DETAILS_SUBJECT}<span class="required">*</span></span sugar='slot'></td>
					<td ><span sugar='slot14b'>
							<input type="text" id="assist_case_name" name="assist_case_name" title="{$MOD.LBL_ASSIST_CASE_DETAILS_SUBJECT}" value="{$ASSIST_CASE_NAME}">
						</span sugar='slot'>
					</td>
					<td scope="col"><span sugar='slot15'>{$MOD.LBL_ASSIST_CASE_DETAILS_PRIORITY}</span sugar='slot'></td>
					<td ><span sugar='slot15b'>
							<select name="assist_case_priority">
								{$ASSIST_CASE_PRIORITY}
							</select>
						</span sugar='slot'></td>
				</tr>
				<tr>
					<td scope="col"><span sugar='slot14'>{$MOD.LBL_ASSIST_CASE_DETAILS_INSTITUTION}</span sugar='slot'></td>
					<td ><span sugar='slot14b'>
							<select name="assist_case_institution">
								{$ASSIST_CASE_INSTITUTION}
							</select>
						</span sugar='slot'>
					</td>
					<td scope="col"><span sugar='slot15'>{$MOD.LBL_ASSIST_CASE_DETAILS_TYPE}</span sugar='slot'></td>
					<td ><span sugar='slot15b'>
							<select name="assist_case_type">
								{$ASSIST_CASE_TYPE}
							</select>
						</span sugar='slot'></td>
				</tr>
				<tr>
					<td scope="col"><span sugar='slot14'>{$MOD.LBL_ASSIST_CASE_DETAILS_NOTIFY_CLOSE}</span sugar='slot'></td>
					<td ><span sugar='slot14b'>
							<input type="hidden" name="assist_case_notify_close" value="0"/>
							<input type="checkbox" name="assist_case_notify_close" {$ASSIST_CASE_NOTIFY_CLOSE}/>
						</span sugar='slot'>
					</td>
					<td scope="col"><span sugar='slot15'>{$MOD.LBL_ASSIST_CASE_DETAILS_NOTIFY_UPDATE}</span sugar='slot'></td>
					<td ><span sugar='slot15b'>
							<input type="hidden" name="assist_case_notify_update" value="0"/>
							<input type="checkbox" name="assist_case_notify_update" {$ASSIST_CASE_NOTIFY_UPDATE}/>
						</span sugar='slot'></td>
				</tr>
				<tr>
					<td scope="col"><span sugar='slot14'>{$MOD.LBL_ASSIST_CASE_DETAILS_ASSIGNED}</span sugar='slot'></td>
					<td >
						<span sugar='slot14b'>
							<input class="sqsEnabled" autocomplete="off" id="assist_case_assigned_name" name="assist_case_assigned_name"  title='{$MOD.LBL_assist_CASE_DETAILS_ASSIGNED}' type="text" value="{$assist_CASE_ASSIGNED_NAME}">
							<input id='assist_case_assigned' name='assist_case_assigned' type="hidden" value="{$ASSIST_CASE_ASSIGNED_ID}" />
							<input title="{$APP.LBL_SELECT_BUTTON_TITLE}" type="button" class="button" value='{$APP.LBL_SELECT_BUTTON_LABEL}' name=btn1
									onclick='open_popup("Users", 600, 400, "", true, false, {$assist_assigned_encoded_users_popup_request_data});' />
						</span sugar='slot'>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<p>

	<script>
		{literal}
		function validate_step2(){
			//add fields to validation and call generic validation script
			var requiredTxt = SUGAR.language.get('app_strings', 'ERR_MISSING_REQUIRED_FIELDS');
			if(validate['wizform']!='undefined'){delete validate['wizform']};
			addToValidate('wizform', 'assist_case_name', 'varchar', true,  document.getElementById('assist_case_name').title);
			var check_date = new Date();
			oldStartsWith =84;
			return check_form('wizform');
		}
		{/literal}
	</script>
