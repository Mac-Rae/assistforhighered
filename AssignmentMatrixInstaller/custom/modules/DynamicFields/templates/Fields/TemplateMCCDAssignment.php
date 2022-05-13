<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/DynamicFields/templates/Fields/TemplateRelatedTextField.php';
class TemplateMCCDAssignment extends TemplateRelatedTextField {
    var $type = 'MCCDAssignment';
    public $ext2 = 'Users';
}