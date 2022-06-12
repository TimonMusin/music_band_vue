<?php
$charset = "utf8";
$host = 'localhost';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = 'root'; // Установленный вами пароль пользователю
$db_name = 'music_band';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name);
if($link->connect_error){
    die ("Ошибка соединения");
}
if (!$link->set_charset($charset)){
    echo "Ошибка кодировки";

}

// $conn = new mysqli("localhost", "root", "mypassword");
// if($conn->connect_error){
//     die("Ошибка: " . $conn->connect_error);
// }
// echo "Подключение успешно установлено";
// $conn->close();
?>