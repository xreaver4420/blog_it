<?php
$post_id = $_GET['id'];

$sql = 'SELECT * FROM post where post_id = :post_id';
$db->query($sql);
$db->bind([
    ':post_id'=> $post_id,
]);
$row = $db->find();

$count = $db ->rowCount();
if($count == 0){
    header('Location '.DB_HOST.'/?a=404');
    exit();
}else {
    echo $twig->render('/post/view.html', [
        'bg_image' => '/assets/img/post-bg.jpg',
        'site_heading' => $row['title'],
        'sub' => 'This is about me',
        'item' => $row,
    ]);
}