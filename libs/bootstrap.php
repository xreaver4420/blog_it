<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT ^ E_WARNING ^ E_DEPRECATED);

require_once (__DIR__.'/config.php');
require_once (__DIR__.'/global.php');


function __autoLoad($className){
    include_once (__DIR__.'/'. $className . '.class.php');
}

$db = new Database();


// Đăng ký sử dụng Twig
require_once(__DIR__.'\vendor\twig\twig\lib\Twig\Autoloader.php');


Twig_Autoloader::register();
require_once(__DIR__.'/Twig.php');

