<?php


class SABanner
{
    public function displayBanner($event){
        global $sugar_config, $current_user;
        if(empty($current_user->id)){
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
        if(empty($sugar_config['banner']['enabled'])){
            return;
        }
        if(empty($sugar_config['banner']['banner'])){
            return;
        }
        $banner = json_encode(
            "<div style='height: auto;' id='sabanner' class='navbar-fixed-top'>"
            . html_entity_decode($sugar_config['banner']['banner'])
            . "</div>"
        );
        echo <<<EOF
<script>
    $(document).ready(function(){
        var banner = $($banner);
        $("body").prepend(banner);
        $("nav").css("top",banner.height()+"px");
        $(".sidebar").css("top",(banner.height()+$('.navbar').height())+"px");
        $("#content").css("padding-top",(banner.height())+"px");
    });
</script>
EOF;
    }
}