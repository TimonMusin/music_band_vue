<?php
include 'config.php';
$__get_all_products_query = "SELECT * FROM `products`";
$__result_get_all_products_query = mysqli_query($link, $__get_all_products_query);
$result=mysqli_fetch_array($__result_get_all_products_query);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
$resultt = mysqli_query($link, "SELECT * FROM `products`");
mysqli_set_charset($link,'utf8');
while ($row = mysqli_fetch_array($__result_get_all_products_query)) {
    echo '<img src="data://image/jpeg;base64,'.base64_encode($row['image']).'">"';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="on_hover.css">
    <link rel="stylesheet" href="popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="autoriz.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">

    <title>ADMIN PANLE</title>
</head>
<body>
   
        <div class="header d-flex col-md-12  align-items-center">
            <div class="header_leftbar d-flex justify-content-lg-between align-items-center align-self-center">
                <a href="index.php"><p onclick="LoadHome()" class="text_color_black" style="font-weight: 800; font-size: 25px;">Admin Panel</p></a>
                <img src="images/logo.png" width="27" height="22" alt="" style="transform: rotate(-90deg);">
            </div>
            <div class="header_registration">
              <p class="btn scale_12" style="color: white;font-size: 32px;"><?php echo $_COOKIE['login']; ?></button>
              <a href=""><button class="btn scale_12" style="color: #fff; font-size: 22px;">Регламентирование заказов</button></a>
              <a href="change_products.php"><button class="btn scale_12" style="color: #fff; font-size: 22px;">Изменение списка товаров</button></a>
              <a href="logout.php"><button class="btn scale_12" style="color: #fff; font-size: 22px;">Выйти</button></a>
              <img onclick="ToTheBasket()" class="scale_12" src="images/basket.png" alt="asd" width="30" height="30">
              
            </div>
        </div>
        <div class="container">
            <div class="col-md-5 current_products">
                <div class="col-md-5 product">
                    <p>fender stratocaster</p>
                    
                </div>
            </div>
        </div>
        <form action="change_products_validation.php" method="post" enctype="multipart/from-data"  >
            <input type="file" class="form-control" name="file" id="" >
            <input type="text" class="form-control" name="product_name" placeholder="Название товара">
            <input type="text" class="form-control" name="product_price" placeholder="Цена товара">
            <input type="text" class="form-control" name="product_count" placeholder="Количество товара">
            <input type="text" class="form-control" name="product_description" placeholder="Описание товара">
            <input type="submit" class="btn btn-primary" value="зАгрузить">
        </form>
</body>
</html>