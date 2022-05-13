<?php
require_once 'modules/Leads/views/view.list.php';
class CustomLeadsViewList extends LeadsViewList{
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