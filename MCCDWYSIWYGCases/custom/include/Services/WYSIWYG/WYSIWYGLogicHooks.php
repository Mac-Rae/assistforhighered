<?php
class WYSIWYGLogicHooks{
    function storeWYSIWYGImages(&$bean){
        if($bean->storeWYSIWYGImagesRan){
            return;
        }
        $matches = array();
        if($bean->module_name == "Cases"){
            $fields = ["description","resolution"];
        }else{
            $fields = ["description"];
        }
        foreach($fields as $field) {
            $bean->$field = html_entity_decode($bean->$field);
            preg_match_all('#<img[^>]*[\s]+src[^=]*=[\s]*["\']cache/images/(.+?)["\']#si', $bean->$field, $matches);
            foreach ($matches[1] as $match) {
                $fileLoc = sugar_cached('images/' . $match);
                if (!file_exists($fileLoc)) {
                    continue;
                }
                $note = BeanFactory::newBean('Notes');
                $note->name = $match;
                $note->parent_id = $bean->id;
                $note->parent_type = $bean->module_name;
                $note->save();
                $noteId = $note->id;
                $newFileLocation = "upload://$noteId";
                copy($fileLoc, $newFileLocation);
                $secureLink = "index.php?entryPoint=download&type=Notes&id={$noteId}&filename=" . $match;
                $bean->$field = str_replace("cache/images/$match", $secureLink, $bean->$field);
            }
            $bean->$field = htmlentities($bean->$field);
        }
        $bean->storeWYSIWYGImagesRan = true;
        $oldVal = $bean->processed;
        $bean->processed = true;
        $bean->save();
        $bean->processed = $oldVal;
    }
}