<?php
if(!session_id()) session_start();

$_SESSION['user'] = NULL;

require_once(getcwd() .'/libs/hash.php');
$hash = new Hash();
$flash = [
    'type' => '',
    'msg' => ''
];
if(!empty($_POST)){
    $user_name = '';
    $pass = '';
    $success = true;

    if(!$_POST['user'] || $_POST['user'] == ''){
        $flash['type'] = 'error';
        $flash['msg'] = 'Please input username!';
        $success = false;
    }else{
        $user_name = $_POST['user'];
    }

    if(!$_POST['pass'] || $_POST['pass'] == ''){
        $flash['type'] = 'error';
        $flash['msg'] = 'Please input password!';
        $success = false;
    }else{
        $pass = $_POST['pass'];
    }

    if($success){
        $flash = NULL;
        $sql = "SELECT salt FROM `member` WHERE username = :username";
        $db->query($sql);
        $db->bind([
            ':username' => $user_name
        ]);

        $salt = $db->find()['salt'];
        $pass = $hash->create($pass, $salt);

        $sql = "SELECT * FROM `member` WHERE username = :username AND pwd = :pass";
        $db->query($sql);
        $db->bind([
            ':username' => $user_name,
            ':pass' => $pass
        ]);
        $user = $db->find()
        if($db->rowCount() == 1){
            $_SESSION['user'] = $user;
            header("Location: http://".DB_HOST.'/admin');
            exit();
        }else{
            $_SESSION['flash'] = $flash;
            header("Location: http://". DB_HOST . "/admin/?m=user&a=login");
            exit();
        }
    }
}else{
    echo $twig->render('user/login.html');
}