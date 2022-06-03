<?php
require_once 'modules/Cases/views/view.edit.php';
class CustomCasesViewEdit extends CasesViewEdit{
    public function display()
    {
        echo <<<EOF
<style>
    .qtip{
        max-width: 580px;
    }
</style>
EOF;
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