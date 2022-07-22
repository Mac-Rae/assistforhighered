<style>
    {literal}
    #SMSThreadedLoadMore{
        cursor: pointer;
    }
    #threaded_sa_sms_span{
        width: 100%;
    }
    .sa_sms_threaded{
        background:#bbe6a5;
        color:#534d64;
        padding:10px;
        margin:10px;
        border:1px solid transparent;
        border-radius:4px;
        margin-right: 50px;
    }
    .sa_sms_threaded.crm_out {
        background: #e6d5a5;
        color: #534d64;
        padding: 10px;
        margin: 10px;
        border: 1px solid transparent;
        border-radius: 4px;
        margin-left: 50px;
    }
    .sa_sms_threaded.crm_out.scheduled{
        background: #aec6cf;
    }
    .sms_body_textarea{
        width: 100%;
    }
    {/literal}
</style>
<div id="sms_threaded_div">
    <strong>{$THREADED_TITLE}</strong>
    {if $hasMore}
        <a id="SMSThreadedLoadMore">{$SMS_MOD.LBL_LOAD_MORE_LINK}</a>
    {/if}
    <div id="current_sms_threaded">
        {include file="modules/SA_SMS/UI/tpls/threaded_sms.tpl" sms_rows=$sms_rows}
    </div>
    <div id="scheduled_sms_threaded">
        {include file="modules/SA_SMS/UI/tpls/threaded_sms.tpl" sms_rows=$scheduled_sms_rows}
    </div>
</div>
{if $showSendForm}
<div>
    <span id="sms_threaded_status_display"></span>
    <textarea id="sms_threaded_body" class="sms_body_textarea" rows="5" cols="30" maxlength="160" minlength="1"></textarea><br>
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
    <button id="threaded_sms_send" class="button" type="button">Send SMS</button>
</div>
<script>
    {literal}
    function checkForNewSMS(){
        var data = {};
        var last_sms = $('#current_sms_threaded .sa_sms_threaded:last');
        var from = last_sms.data('smsid');
        $.get("index.php?entryPoint=SA_SMSThreadedMore&to_pdf=1&mode=new&from="+from+"&module={/literal}{$recordType}{literal}&record={/literal}{$recordId}{literal}",data,function(res){
            last_sms.after(res);
        });
        var last_sms_scheduled = $('#scheduled_sms_threaded .sa_sms_threaded:last');
        var from_scheduled = last_sms_scheduled.data('smsid');
        $.get("index.php?entryPoint=SA_SMSThreadedMore&to_pdf=1&mode=newscheduled&from="+from_scheduled+"&module={/literal}{$recordType}{literal}&record={/literal}{$recordId}{literal}",data,function(res){
            last_sms_scheduled.after(res);
        });
    }
    $(document).ready(function(){
        var schedule = $('#scheduleSMS');
        schedule.change(function(){
            if(schedule.is(":checked")){
                $('.schedule_options').show();
            }else{
                $('.schedule_options').hide();
            }
        });
        $('#SMSThreadedLoadMore').click(function(){
            var data = {};
            var from = $('.sa_sms_threaded:first').data('smsid');
            $.get("index.php?entryPoint=SA_SMSThreadedMore&to_pdf=1&from="+from+"&module={/literal}{$recordType}{literal}&record={/literal}{$recordId}{literal}",data,function(res){
                $('#SMSThreadedLoadMore').after(res);
            });
        });

        $('#threaded_sms_send').click(function(){
            $.post(
                'index.php',
                {
                    'entryPoint' : 'SA_SMSDialog_Send',
                    'sugar_body_only' : 1,
                    'phone_number' : '{/literal}{$targetNumber}{literal}',
                    'record_type' : '{/literal}{$recordType}{literal}',
                    'record' : '{/literal}{$recordId}{literal}',
                    'sms_body' : $('#sms_threaded_body').val(),
                    'schedule_date' : $('input[name=schedule_date]').val(),
                    'scheduleSMS' : $('input[name=scheduleSMS]').is(":checked") ? 1 : ''

                },
                function(data){
                    var status_display = $('#sms_threaded_status_display');
                    status_display.hide();
                    status_display.text(data.result);
                    status_display.toggle("highlight");
                    if(!data.sms){
                        return;
                    }
                    $('#sms_threaded_body').val('');
                    checkForNewSMS();
                },
                'JSON'
            );
        });
        function scheduleSMSChecks(){
            checkForNewSMS();
            setTimeout(scheduleSMSChecks,10000);
        }
        scheduleSMSChecks();
    });
    {/literal}
</script>
{/if}