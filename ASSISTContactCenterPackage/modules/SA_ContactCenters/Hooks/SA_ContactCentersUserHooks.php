<?php
class SA_ContactCentersUserHooks{
    function relationshipAdded($bean, $event, $args){
        echo "Called";
        /*
         *  Remove from other user lists, manager lists
         */

    }
}