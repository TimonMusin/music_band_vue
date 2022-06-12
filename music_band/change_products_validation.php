<?php
include 'config.php';
if (isset($_FILES['file'])){
    $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_count = $_POST['product_count'];
    $product_description = $_POST['product_description'];
    var_dump($_FILES['file']);
    var_dump($_POST);

   
    $__query_to_upload_file_to_database = "INSERT INTO `products`(name, image, price, count, description) VALUES ('$product_name', '$file', '$product_price', '$product_count', '$product_description')";
    $__result_query_to_upload_file_to_database =  mysqli_query($link, $__query_to_upload_file_to_database);

   
    if (empty($_FILES['product_name']) || empty($_FILES['product_price']) || empty($_FILES['product_count']) || empty($_FILES['product_description'])  ){
        //Какое то поле оказалось пустым. Дальше не идём
       
    }
    else{
        $__query_to_upload_file_to_database = "INSERT INTO `products`(name, image, price, count, description) VALUES ('$product_name', '$file', '$product_price', '$product_count', '$product_description')";
        $__result_query_to_upload_file_to_database =  mysqli_query($link, $__query_to_upload_file_to_database);
    }
 
    
}


?>