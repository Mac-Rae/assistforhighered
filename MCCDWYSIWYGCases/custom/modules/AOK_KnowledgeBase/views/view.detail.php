<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once 'modules/AOK_KnowledgeBase/views/view.detail.php';

class CustomAOK_KnowledgeBaseViewDetail extends AOK_KnowledgeBaseViewDetail
{
    public function __construct()
    {
        parent::__construct();
    }

    public function display()
    {

     parent::display();
        $cdnInfo = get_mccd_tinymce_url_info();
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
        {selector:'#description,#additional_info',
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

    public function setDecodeHTML()
    {
        $this->bean->description = html_entity_decode(str_replace('&nbsp;', ' ', $this->bean->description));
        $this->bean->additional_info = html_entity_decode(str_replace('&nbsp;', ' ', $this->bean->additional_info));
    }
}
