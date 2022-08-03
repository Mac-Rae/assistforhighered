function assistReportRestriction(){
    var reportId = $('#aor_report_id').val();
    if(!reportId){
        return true;
    }
    var validated = true;
    $.get(
        {
            url:"index.php?entryPoint=ASSISTIsReportRestricted&bean="+reportId,
            success:function( data ) {
                validated = !data;
            },
            dataType:"json",
            async:false
        }
    );
    return validated;
}

$(document).ready(function(){
    addToValidateCallback('EditView','aor_report_id', 'relate', false, SUGAR.language.translate('AOR_Scheduled_Reports','LBL_RESTRICTED_REPORT'),assistReportRestriction);
});