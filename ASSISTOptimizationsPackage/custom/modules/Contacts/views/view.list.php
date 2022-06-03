<?php

require_once 'modules/Contacts/views/view.list.php';

class CustomContactsViewList extends ContactsViewList
{
    public function processSearchForm()
    {
        if($this->params['orderBy'] == 'NAME'){
            $this->params['overrideLastNameOrder'] = true;
            $this->params['orderBy'] = 'LAST_NAME';
        }
        parent::processSearchForm();
    }
}
