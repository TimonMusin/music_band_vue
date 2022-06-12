<?php
include 'admin_config.php';
if (isset($_COOKIE['login']) &&  isset($_COOKIE['password'])){
    if ($_COOKIE['login'] == $admin_login && $_COOKIE['password'] == $admin_password )
    {
        header("Location:admin_panel.php");
    }
    else{
        header("Location:autoriz.php");
    }
}

?>