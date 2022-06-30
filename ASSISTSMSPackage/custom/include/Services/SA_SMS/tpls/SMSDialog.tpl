<form id="sa_sms_dialog" action="index.php">
    <input type="hidden" name="entryPoint" value="SA_SMSDialog_Send">
    <input type="hidden" name="sugar_body_only" value="1">
    <div class="form-group">
        <label for="">{$SMS_MOD.LBL_SMS_DIALOG_TO}:</label>
        <span><strong>{$record.name} - {$phoneNumber}</strong></span>
        <input type="hidden" name="phone_number" value="{$phoneNumber}"/>
        <input type="hidden" name="record_type" value="{$record.type}"/>
        <input type="hidden" name="record" value="{$record.id}"/>
    </div>
    <div class="form-group">
        <label for="sms_body">{$SMS_MOD.LBL_SMS_DIALOG_BODY}:</label>
        <textarea class="form-control" id="sms_body" name="sms_body"></textarea>
    </div>
    <div class="form-group">
        <label>{$SMS_MOD.LBL_SMS_DIALOG_SCHEDULE}: <input type="checkbox" name="scheduleSMS" id="scheduleSMS"/></label>
        <div class="schedule_options" style="display: none;">
            <table>
                <tr valign="middle">
                    <td class="dateTimeComboColumn" nowrap="">
                        <input autocomplete="off" type="text" id="schedule_date_date" class="datetimecombo_date" value="" size="11" maxlength="10" title="" tabindex="0" onblur="combo_schedule_date.update();" onchange="combo_schedule_date.update(); SugarWidgetScheduler.update_time();">
                        <button type="button" id="schedule_date_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="Enter Date"></span></button>
                    </td>
                    <td class="dateTimeComboColumn" nowrap="">
                        <div id="schedule_date_time_section" class="datetimecombo_time_section">
                            <span>
                                <select class="datetimecombo_time" size="1" id="schedule_date_hours" tabindex="0" onchange="combo_schedule_date.update(); SugarWidgetScheduler.update_time();"><option></option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04" selected="">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>&nbsp;:&nbsp;
                                <select class="datetimecombo_time" size="1" id="schedule_date_minutes" tabindex="0" onchange="combo_schedule_date.update(); SugarWidgetScheduler.update_time();"><option></option><option value="00">00</option><option value="15" selected="">15</option><option value="30">30</option><option value="45">45</option></select>&nbsp;
                                <select class="datetimecombo_time" size="1" id="schedule_date_meridiem" tabindex="0" onchange="combo_schedule_date.update(); SugarWidgetScheduler.update_time();"><option></option><option value="am" selected="">am</option><option value="pm">pm</option></select>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>

            <input type="hidden" class="DateTimeCombo" id="schedule_date" name="schedule_date" value="">
            <script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
            {literal}
            <script src="cache/include/javascript/sugar_grp_jsolait.js"></script>
            <script type="text/javascript">
                var combo_schedule_date = new Datetimecombo("{/literal}{$smarty.now|date_format:"%Y-%m-%d %I:%M %p"}{literal}", "schedule_date", "11:00 pm", "0", '', false, true);
                //Render the remaining widget fields
                text = combo_schedule_date.html('SugarWidgetScheduler.update_time();');
                document.getElementById('schedule_date_time_section').innerHTML = text;

                //Call eval on the update function to handle updates to calendar picker object
                eval(combo_schedule_date.jsscript('SugarWidgetScheduler.update_time();'));

                addToValidateBinaryDependency('sa_sms_dialog',"schedule_date_hours", 'alpha', false, "Missing required field: Hours" ,"schedule_date_date");
                addToValidateBinaryDependency('sa_sms_dialog', "schedule_date_minutes", 'alpha', false, "Missing required field: Minutes" ,"schedule_date_date");
                addToValidateBinaryDependency('sa_sms_dialog', "schedule_date_meridiem", 'alpha', false, "Missing required field: Meridiem","schedule_date_date");

                YAHOO.util.Event.onDOMReady(function()
                {

                    Calendar.setup ({
                        onClose : update_schedule_date,
                        inputField : "schedule_date_date",
                        form : "sa_sms_dialog",
                        ifFormat : "%Y/%m/%d %H:%M",
                        daFormat : "%Y/%m/%d %H:%M",
                        button : "schedule_date_trigger",
                        singleClick : true,
                        step : 1,
                        weekNumbers: false,
                        startWeekday: 0,
                        comboObject: combo_schedule_date
                    });

                    //Call update for first time to round hours and minute values
                    combo_schedule_date.update(false);

                });

                {/literal}
            </script>
        </div>
    </div>
    <button type="submit" id="sendSMSButton" class="btn btn-default">{$SMS_MOD.LBL_SMS_DIALOG_SEND}</button>
    <button type="button" onclick="sms_mb.hide();sms_mb.destruct();sms_mb.remove();" class="btn btn-default">{$SMS_MOD.LBL_SMS_DIALOG_CANCEL}</button>
</form>
{literal}
<script>
    $(document).ready(function(){
        var schedule = $('#scheduleSMS');
        schedule.change(function(){
            if(schedule.is(":checked")){
                $('.schedule_options').show();
            }else{
                $('.schedule_options').hide();
            }
        });
        $('#sendSMSButton').click(function(e){
            e.preventDefault();
            if(!$('#sms_body').val()){
                alert('{/literal}{$SMS_MOD.LBL_SMS_DIALOG_NO_BODY}{literal}');
                return false;
            }
            if(!confirm('{/literal}{$SMS_MOD.LBL_SEND_SMS_CONFIRM}{literal}')){
                return false;
            }
            var form = $('#sa_sms_dialog');
            var actionUrl = form.attr('action');
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                success: function(data)
                {
                    alert(data.result);
                },
                dataType : 'json',
            });
            sms_mb.hide();
            sms_mb.destruct();
            sms_mb.remove();
            return false;
        });
    });
</script>
{/literal}