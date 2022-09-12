<?php
spl_autoload_register(function ($class) {
    if(strpos($class, 'libphonenumber\\') !== 0){
        return;
    }
    $path = substr($class,15);
    $path = str_replace('\\\\', '/', $path);
    require 'custom/lib/SA_SMS/libphonenumber/'.$path.'.php';
});