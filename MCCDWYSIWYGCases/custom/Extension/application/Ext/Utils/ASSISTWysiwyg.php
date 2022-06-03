<?php
function get_assist_tinymce_url_info(){
    global $sugar_config;
    $info = [];
    if(empty($sugar_config['assist_wysiwyg']['tinymce_url'])){
        $info['url'] = "https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js";
    }else{
        $info['url'] = $sugar_config['assist_wysiwyg']['tinymce_url'];
    }
    if(empty($sugar_config['assist_wysiwyg']['tinymce_integrity'])){
        $info['integrity'] = "sha512-XaygRY58e7fVVWydN6jQsLpLMyf7qb4cKZjIi93WbKjT6+kG/x4H5Q73Tff69trL9K0YDPIswzWe6hkcyuOHlw==";
    }else{
        $info['integrity'] = $sugar_config['assist_wysiwyg']['tinymce_integrity'];
    }
    $bits = explode("/",$info['url']);
    array_pop($bits);
    $info['base_url'] = implode("/",$bits);
    return $info;
}
