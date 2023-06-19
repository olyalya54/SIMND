<?php
include "app/database/db.php";
require  'rb.php';

$errMsg = '';
$users = selectAll('users');

//РЕГИСТРАЦИЯ НА САЙТЕ
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $avatar = "";
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if ($login === '' || $email === '' || $passF === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 2) {
        $errMsg = "Логин должен быть более 2-х символов";
    }elseif ($passF !== $passS) {
        $errMsg = "Пароли в обоих полях должны соответствовать!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'avatar' => $avatar,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['avatar'] = $user['avatar'];
            header('location: ' . BASE_URL);
        }
    }

}else{
    $login = '';
    $email = '';
}
//    $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);

//ВХОД НА САЙТ
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            header('location: ' . BASE_URL);
        }else{
            $errMsg = "Почта либо пароль введены неверно";
        }
    }
}else{
    $email = '';
}

function getAvatar($login){
    $mysqli = connectDB();
    $result_set = $mysqli->query("SELECT 'avatar' FROM 'users' WHERE 'login' ='$login'");
    $row = $result_set->fetch_assoc();
    closeDB($mysqli);
    return $row["avatar"];

}







