<?php
require_once 'include/SugarFields/Fields/Bool/SugarFieldBool.php';

class CustomSugarFieldBool extends SugarFieldBool{
    public function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
    {
        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        //If there was a type override to specifically render it as a boolean, show the EditView checkbox
        if (
            preg_match("/(favorites|current_user|open)_only.*/", $vardef['name'])
            || $vardef['name'] == 'my_students'
        ) {
            return $this->fetch($this->findTemplate('EditView'));
        } else {
            return $this->fetch($this->findTemplate('SearchView'));
        }
    }
}