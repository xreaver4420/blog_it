<?php

require_once './libs/bootstrap.php';
require_once  './libs/vendor/autoload.php';
$admin_pattern = '/^(\/admin)(\/)*((.)*)*/';
if(preg_match($admin_pattern, $_SERVER['REQUEST_URI'])){
    include(getcwd().'/app/backend/index.php');
}
else{
    $templateDir = getcwd().'/app/frontend/views';
    $cacheDir = getcwd().'/caches';

    //Cấu hình twig để load view
    $loader = new Twig_Loader_Filesystem($templateDir);
    $twig = new Twig_Environment($loader, ['cache' => $cacheDir,'debug'=> false,'auto_reload'=> true]);
    $twig->addExtension(new MyTwig());

    include_once('router.php');
}
?>

