$(document).ready(
    function(){
        var campaignType = $('#campaign_type').val();
        if(campaignType != 'BulkCase'){
            return;
        }
        $('#send_emails_button').hide();
        $('#mark_as_sent_button').hide();
        $('#send_test_button').hide();
    }
);
function createBulkCases(){
    var form = $('#formDetailView');
    form.append($('<input type="hidden" name="entryPoint" value="MCCDExecuteBulkCases">'));
    form.find("[name=action]").remove();
    form.find("[name=module]").remove();
    form.submit();
    return false;
}