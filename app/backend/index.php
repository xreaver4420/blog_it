<?php
$admin_pattern = '/^(\/admin)(\/)*((.)*)*/';

if (preg_match($admin_pattern, $_SERVER['REQUEST_URI'])){
    $templateDir = getcwd().'/app/backend/views';
    $cacheDir = getcwd().'/caches';
    //Cấu hình Twig
    $loader = new Twig_Loader_Filesystem($templateDir);
    $twig = new Twig_Environment($loader, array('cache'=> $cacheDir,'auto_reload'=>true,'debug'=>true));
    $twig->addExtension(new MyTwig());

    include_once(getcwd().'/router.php');
}
else{
    include(getcwd().'/index.php');
}