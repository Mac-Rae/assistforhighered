<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once 'modules/AOK_KnowledgeBase/views/view.edit.php';

class CustomAOK_KnowledgeBaseViewEdit extends AOK_KnowledgeBaseViewEdit
{
    public function __construct()
    {
        parent::__construct();
    }

    public function displayTMCE()
    {
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
        {selector:'#description,#additional_info',
        height: 500,
        menubar: false,
        default_link_target: '_blank',
        branding: false,
        browser_spellcheck: true,
        plugins: [
                'advlist autolink lists link image imagetools charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
                'bold italic forecolor backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | link | image |help',
        file_picker_types: 'image',
        automatic_uploads: true,
        images_upload_url: 'index.php?entryPoint=tinymceimagepost',
        });
    tinyMCE.on('NodeChange', function (e) {
        if (e.element.tagName === "IMG") { 
            tinyMCE.uploadImages();
        }
    });
});

</script>
EOF;
    }
}
