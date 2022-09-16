function openSASMS(recordId, recordType, phoneNumber){
    var data = {
        'record' : recordId,
        'record_type' : recordType,
        'phone_number' : phoneNumber,
        'sugar_body_only' : true
    };
    $.get('index.php?entryPoint=SA_SMSDialog',data, function(ret){
        if(typeof sms_mb !== 'undefined'){
           sms_mb.remove();
           sms_mb = null;
        }
        sms_mb = messageBox(
            {
                "size":"m",
                "showHeader": false,
                "showFooter": false
            }
        );
        sms_mb.setBody(ret);
        sms_mb.show();

    });
}
