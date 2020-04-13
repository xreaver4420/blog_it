<?php

$sql = "SELECT * FROM post where title = 'about'";
$db->query($sql);
$row = $db->find();


echo $twig->render('about.html', [
    'bg_image' => '/assets/img/about-bg.jpg',
    'site_heading' => 'About',
    'sub' => 'This is about me',
    'items' => $row,
]);

