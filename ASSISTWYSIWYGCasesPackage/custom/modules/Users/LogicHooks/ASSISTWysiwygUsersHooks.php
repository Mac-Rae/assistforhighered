<?php
class ASSISTWysiwygUsersHooks{
    function setWysiwyg(User $bean,$event){
        $bean->setPreference('editor_type','tinymce');
    }
}