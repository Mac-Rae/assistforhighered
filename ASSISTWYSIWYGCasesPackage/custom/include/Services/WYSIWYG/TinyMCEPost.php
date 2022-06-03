<?php
global $sugar_config;
$imageFolder = sugar_cached("images/");
if (!is_dir($imageFolder)) {
    create_cache_directory("images/");
}

reset($_FILES);
$temp = current($_FILES);
if (!is_uploaded_file($temp['tmp_name'])) {
    header("HTTP/1.1 500 Server Error");
    exit();
}
if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
    header("HTTP/1.1 400 Invalid file name.");
    return;
}
if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "jpeg", "png"))) {
    header("HTTP/1.1 400 Invalid extension.");
    return;
}

$fileName = create_guid().$temp['name'];
$filetowrite = $imageFolder . $fileName;
if(!move_uploaded_file($temp['tmp_name'], $filetowrite)){
    header("HTTP/1.1 500 Server Error");
    exit();
}

echo json_encode(array('location' => $sugar_config['site_url'].'/'.$filetowrite));
