<?php
require_once 'modules/Emails/views/view.compose.php';
class CustomEmailsViewCompose extends EmailsViewCompose{
    public function __construct()
    {
        parent::__construct();
    }
    public function display()
    {
        $cdnInfo = get_mccd_tinymce_url_info();
        $cdnUrl = $cdnInfo['url'];
        $cdnIntegrity = $cdnInfo['integrity'];
        $cdnBase = $cdnInfo['base_url'];
        echo <<<EOF
<script>
var mccd_tiny_mce_base_url = '$cdnBase';
</script>
<script src="$cdnUrl" integrity="$cdnIntegrity" crossorigin="anonymous"></script>
EOF;
        parent::display();


    }
}