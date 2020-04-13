<?php
$page = (isset($_GET['p']) ? $_GET['p'] : 1);
$limit = 3;
$offset = ($page - 1)*$limit;

$sql = "SELECT * FROM post WHERE title!='about' AND published=1 ORDER BY post_id DESC ";
$db->query($sql);


$rows = $db->findALL();

$sql = "SELECT COUNT(*) FROM post WHERE title != 'about' AND published = 1";
$db->query($sql);
$totalItems = $db->find()['count'];
$totalPage = ceil($totalItems/$limit);

echo $twig->render('post/list.html', [
    'bg_image' => '/assets/img/post-bg.jpg',
    'site_heading' => 'blogphp7',
    'sub' => "All post in blog",
    'items' => $rows,
    'totalPage' => $totalPage,
    'currentPage' => $page,
]);
