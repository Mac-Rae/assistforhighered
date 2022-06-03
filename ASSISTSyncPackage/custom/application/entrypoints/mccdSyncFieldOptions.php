<?php
if(empty($_REQUEST['module'])){
    echo "";
    return;
}

$bean = BeanFactory::getBean($_REQUEST['module']);
$opts = [];
foreach($bean->field_defs as $name=>$def){
    if($def['type'] != 'link'){
        continue;
    }
    echo "<option value='$name'>".translate($def['vname'],$_REQUEST['module'])."</option>";
}