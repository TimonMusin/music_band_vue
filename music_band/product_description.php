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

    <title>Document</title>
</head>
<body>
    <h1>Текущие заказы</h1>
        <div class="header d-flex col-md-12  align-items-center">
            <div class="header_leftbar d-flex justify-content-lg-between align-items-center align-self-center">
                <p onclick="LoadHome()" class="text_color_black" style="font-weight: 800; font-size: 25px;">Music Band</p>
                <img src="images/logo.png" width="27" height="22" alt="" style="transform: rotate(-90deg);">
            </div>
            <div class="header_registration">
              <p class="btn scale_12" style="color: white;font-size: 32px;"><?php echo $_COOKIE['login']; ?></button>
              <a href=""><button class="btn scale_12" style="color: #fff; font-size: 22px;">История заказов</button></a>
              <a href=""><button class="btn scale_12" style="color: #fff; font-size: 22px;">Текущие заказы</button></a>
              <a href="logout.php"><button class="btn scale_12" style="color: #fff; font-size: 22px;">Logout</button></a>
              <img onclick="ToTheBasket()" class="scale_12" src="images/basket.png" alt="asd" width="30" height="30">
              
            </div>
        </div>
</body>
</html>