function mccdSync(id){
    var mb = messageBox({"showHeader": false, "showFooter": false});
    mb.setBody(
        "<p style='text-align: center;' >"+SUGAR.language.translate("app_strings",'LBL_MCCD_RDS_STARTING_SYNC')+"</p>"
        + "<br><img style='display: block;margin-left:auto;margin-right:auto;' src='themes/default/images/img_loading_54.gif'/>"
    );
    mb.show();
    $.post(
        'index.php',
        {
            'entryPoint' : 'mccdRDSSync',
            'record' : id
        },
        function(d){
            mb.setBody(d);
            location.reload();
        }
        ).error(function(d){
            mb.setBody(d);
    });

}