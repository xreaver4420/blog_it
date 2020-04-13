<?php

$sql = "SELECT Top(4) * FROM post WHERE title!='about' ORDER BY post_id DESC";
$db -> query($sql);
$rows = $db->findAll();

echo $twig->render('home.html', [
    'bg_image' => '/blog/assets/img/home-bg.jpg',
    'site_heading' => 'blogphp7',
    'sub' => "A test blog",
    'items' => $rows
]);