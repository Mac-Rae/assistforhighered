<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/DynamicFields/templates/Fields/TemplateRelatedTextField.php';
class TemplateASSISTAssignment extends TemplateRelatedTextField {
    var $type = 'ASSISTAssignment';
    public $ext2 = 'Users';
}