<?php
class SAContactCenterHooks{
    function displayContactCenterBanner(){
        global $current_user, $app_strings, $app;
        if(empty($current_user->id)){
            return;
        }
        if(empty($current_user->sa_contactcenters_id)){
            return;
        }
        if(!empty($_REQUEST['to_pdf'])){
            return;
        }
        if(!empty($_REQUEST['sugar_body_only'])){
            return;
        }
        $moduleActionWhiteList = ["index","list","DetailView","EditView","ComposeView","WizardHome"];
        if(!empty($_REQUEST['action']) && !in_array($_REQUEST['action'],$moduleActionWhiteList)){
            return;
        }
        if(!empty($app->controller) && !empty($app->controller->view) && $app->controller->view == 'ajax'){
            return;
        }

        $contactCenter = BeanFactory::getBean('SA_ContactCenters',$current_user->sa_contactcenters_id);
        if(empty($contactCenter->id)){
            return;
        }
        //TODO: Add a managers relationship
        //TODO: Add a button to the top bar for managers
        //TODO: Add a new view for users list
        //TODO: Implement view
        $url = $contactCenter->sso_login_url;
        $bits = parse_url($url);
        if(empty($bits['scheme'])){
            $url = "https://".$url;
        }

        $bannerContents = "<div id='sacontactcenterbanner' class='contact-center-banner navbar-fixed-top'>"
            .  $contactCenter->name . ": <a class='button' style='padding-top: 5px;padding-bottom: 5px;' target='_blank' href='".$url."'>".$app_strings['LBL_CONTACT_CENTER_BANNER_LOGIN']."</a>"
            . "&nbsp;&nbsp;<a class='button' style='padding-top: 5px;padding-bottom: 5px;' target='_blank' href='index.php?module=SA_ContactCenters&action=ContactCenter&record=".$contactCenter->id."'>".$app_strings['LBL_CONTACT_CENTER_INSTANCE']."</a>";

        if($manager){
            $bannerContents .= "&nbsp;&nbsp;<a class='button' style='padding-top: 5px;padding-bottom: 5px;' target='_blank' href='index.php?module=SA_ContactCenters&action=ContactCenterUsers&record=".$contactCenter->id."'>".$app_strings['LBL_CONTACT_CENTER_AGENTS']."</a>";
        }

$bannerContents .= "</div>";

        $banner = json_encode(
            $bannerContents
        );
        $colour = $contactCenter->banner_colour;
        if(!preg_match('/#\w+/',$colour)){
            $colour = '#0c2340';
        }
        $colours = [];
        $colourFields = ['banner_colour','banner_text_colour','button_colour','button_hover_colour','button_text_colour'];
        foreach($colourFields as $colourField){
            $colour = $contactCenter->$colourField;
            if(!preg_match('/#\w+/',$colour)){
                $colour = $contactCenter->field_defs[$colourField]['default'];
            }
            $colours[$colourField] = $colour;
        }

        echo <<<EOF
<style>
    .contact-center-banner{
        background-color: {$colours['banner_colour']};
        color: {$colours['banner_text_colour']};
        text-align:center;
        padding: 5px;
        height: 45px;
    }
    .contact-center-banner .button{
        background-color: {$colours['button_colour']};
        color: {$colours['button_text_colour']};
    }
    .contact-center-banner .button:hover{
        background-color: {$colours['button_hover_colour']};
    }
    
</style>
<script>
    $(document).ready(function(){
        var banner = $($banner);
        $("body").prepend(banner);
        var offset = 45;
        if($('#sabanner').length > 0){
            offset += $('#sabanner').height();
            $('#sabanner').css("top","45px");
        }
        $("nav").css("top",offset+"px");
        $(".sidebar").css("top",(offset+$('.navbar').height())+"px");
        $("#buttontoggle").css("top",(offset+$('.navbar').height())+"px");
        
        $("#content").css("padding-top",(offset)+"px");
    });
</script>
EOF;
    }
}