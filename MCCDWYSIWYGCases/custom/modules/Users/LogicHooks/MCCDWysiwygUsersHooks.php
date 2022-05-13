<?php
class MCCDWysiwygUsersHooks{
    function setWysiwyg(User $bean,$event){
        $bean->setPreference('editor_type','tinymce');
    }
}