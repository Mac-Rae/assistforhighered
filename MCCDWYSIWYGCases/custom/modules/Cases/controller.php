<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once 'modules/Cases/controller.php';

class CustomCasesController extends CasesController
{
    public function action_get_kb_articles()
    {
        global $mod_strings;
        global $app_list_strings;
        $search = trim($_POST['search']);

        $relevanceCalculation = "CASE WHEN name LIKE '$search' THEN 10 
                                ELSE 0 END + CASE WHEN name LIKE '%$search%' THEN 5 
                                ELSE 0 END + CASE WHEN description LIKE '%$search%' THEN 2 ELSE 0 END";

        $query = "SELECT id, $relevanceCalculation AS relevance FROM aok_knowledgebase 
                  WHERE deleted = '0' AND $relevanceCalculation > 0 ORDER BY relevance DESC";

        $offset = 0;
        $limit = 30;

        $result = DBManagerFactory::getInstance()->limitQuery($query, $offset, $limit);

        $echo = '<table>';
        $echo .= '<tr><th>' . $mod_strings['LBL_SUGGESTION_BOX_REL'] . '</th><th>' . $mod_strings['LBL_SUGGESTION_BOX_TITLE'] . '</th><th>' . $mod_strings['LBL_SUGGESTION_BOX_STATUS'] . '</th>';
        $echo .= "<th>".$mod_strings['LBL_SUGGESTION_BOX_ACTIONS']."</th>";
        $echo .= "</tr>";
        $count = 1;
        while ($row = DBManagerFactory::getInstance()->fetchByAssoc($result)) {
            $kb = BeanFactory::getBean('AOK_KnowledgeBase', $row['id']);
            $echo .= '<tr class="kb_article" data-id="' . $kb->id . '">';
            $echo .= '<td> &nbsp;' . $count . '</td>';
            $echo .= '<td>' . $kb->name . '</td>';
            $echo .= '<td>' . $app_list_strings['aok_status_list'][$kb->status] . '</td>';
            $echo .= "<td>";
            $echo .= "<a id='assign_kb_".$kb->id."' onclick='mccd_relate_to_case(".json_encode($kb->id).")'><img height='10' src='custom/themes/SuiteP/MCCDCaseManagement/images/check.svg'/></a>";
            $echo .= "&nbsp;&nbsp;<a onclick='mccd_copy_to_case(".json_encode($kb->id).")'><img height='10' src='custom/themes/SuiteP/MCCDCaseManagement/images/copy.svg'/></a></td>";
            $echo .= '</tr>';
            $count++;
        }
        $echo .= '</table>';

        if ($count > 1) {
            echo $echo;
            $confirmMessage = json_encode($mod_strings['LBL_MCCD_CONFIRM_COPY_KB']);
            echo <<<EOF
<script>
function mccd_relate_to_case(kb_id){
    $('#EditView').append("<input type='hidden' name='mccd_related_kb_id[]' value='"+kb_id+"'/>");
    $('#assign_kb_'+kb_id+" img").attr("src",'custom/themes/SuiteP/MCCDCaseManagement/images/check_circle.svg');
}
function mccd_copy_to_case(kb_id){
    if(!confirm($confirmMessage)){
        return;
    }
    var url = 'index.php?module=Cases&action=get_kb_article';
    $.post({
        url:url,
        data: {
            'article': kb_id
        },
        success: function (data) {
            tinyMCE.get('description').setContent(data);
        }
    });
}
</script>
EOF;

        } else {
            echo $mod_strings['LBL_NO_SUGGESTIONS'];
        }
        die();
    }
    public function action_get_kb_article()
    {
        global $mod_strings;

        $article_id = $_POST['article'];
        $article = BeanFactory::newBean('AOK_KnowledgeBase');
        $article->retrieve($article_id);

        echo '<span class="tool-tip-title"><strong>' . $mod_strings['LBL_TOOL_TIP_TITLE'] . '</strong>' . $article->name . '</span><br />';
        echo '<span class="tool-tip-title"><strong>' . $mod_strings['LBL_TOOL_TIP_BODY'] . '</strong></span><div id="kb_desc">' . html_entity_decode($article->description)."</div>";

        if (!$this->IsNullOrEmptyString($article->additional_info)) {
            echo '<hr id="tool-tip-separator">';
            echo '<span class="tool-tip-title"><strong>' . $mod_strings['LBL_TOOL_TIP_INFO'] . '</strong></span><p id="additional_info_p">' . html_entity_decode($article->additional_info) . '</p>';
            echo '<span class="tool-tip-title"><strong>' . $mod_strings['LBL_TOOL_TIP_USE'] . '</strong></span><br />';
            echo '<input id="use_resolution" name="use_resolution" class="button" type="button" value="' . $mod_strings['LBL_RESOLUTION_BUTTON'] . '" />';
        }
        die();
    }
    private function IsNullOrEmptyString($question)
    {
        return (!isset($question) || trim($question) === '');
    }
}
