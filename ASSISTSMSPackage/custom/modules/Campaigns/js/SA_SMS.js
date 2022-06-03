$(document).ready(
    function(){
        var campaignType = $('#campaign_type').val();
        if(campaignType != 'SA_SMS'){
            return;
        }
        $('#send_emails_button').hide();
        $('#mark_as_sent_button').hide();
        $('#send_test_button').hide();
    }
);
function scheduleSMS(){
    var form = $('#formDetailView');
    form.append($('<input type="hidden" name="entryPoint" value="SA_SMSSchedule">'));
    form.find("[name=action]").remove();
    form.find("[name=module]").remove();
    form.submit();
    return false;
}