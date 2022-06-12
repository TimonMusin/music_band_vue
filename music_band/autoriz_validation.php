<?php
session_start();
include 'config.php';
include 'admin_config.php';
$login = $_POST['login'];
$password = $_POST['password'];

$__sql_get_users_by_post = "SELECT * FROM `users` WHERE `users`.`login` = '$login'";
$__sql_get_users_by_post_result = mysqli_query($link, $__sql_get_users_by_post);
$row = mysqli_fetch_array($__sql_get_users_by_post_result);
if (mysqli_num_rows($__sql_get_users_by_post_result) > 0){
    //Такой логин в базе есть
    if ($login == $admin_login && $password == $admin_password ){
        //были введены данные админа
        //переходим в панель админа
        setcookie("login", $login, time()+3600);
        setcookie("password", $password, time()+3600);
        header("Location:admin_panel.php");
    }
    else{
        //логин и пароль обычные
        if ($row[4] == $password){
            //если  и пароль совпадает с паролем из базы - заходим
            setcookie("login", $login, time()+3600);
            setcookie("password", $password, time()+3600);
            header("Location:autoriz.php");
    
        }
        else{
            $_SESSION['autoriz_password_error'] = "Вы неправильно ввели пароль";
            //echo $_SESSION['autoriz_password_error'];
            header("Location:index.php");
        }

    }
   
    
}
else{
       
        $_SESSION['autoriz_login_error'] = "Такого логина не существует";
        //echo $_SESSION['autoriz_login_error'];
        header("Location:index.php");

}
?>