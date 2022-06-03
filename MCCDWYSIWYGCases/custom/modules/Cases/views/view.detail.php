<?php
class CustomCasesViewDetail extends ViewDetail{

    public function getStatusInfo(){
        global $app_list_strings;
        $opts = $app_list_strings[$this->bean->field_defs['status']['options']];
        $statuses = [];
        $selected = true;
        foreach($opts as $key => $display){
            $statuses[] = ['display_name' => $display,"selected" => $selected];
            if($this->bean->status == $key){
                $selected = false;
            }
        }
        return $statuses;
    }

    public function display()
    {
        $this->bean->resolution = html_entity_decode(str_replace('&nbsp;', ' ', $this->bean->resolution));
        $this->dv->th->ss->assign("statuses",$this->getStatusInfo());
        parent::display();
        $cdnInfo = get_assist_tinymce_url_info();
        $cdnUrl = $cdnInfo['url'];
        $cdnIntegrity = $cdnInfo['integrity'];
        $cdnBase = $cdnInfo['base_url'];
        echo <<<EOF
<script src="$cdnUrl" integrity="$cdnIntegrity" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    tinyMCE.baseURL = "$cdnBase";
    tinyMCE.suffix = '.min';
    tinyMCE.init(
        {selector:'#description,#resolution',
        readonly: true,
        height: 500,
        menubar: false,
        default_link_target: '_blank',
        branding: false,
        browser_spellcheck: true,
        plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
        ],
        toolbar: ''
        });
});
</script>
EOF;
    }

}