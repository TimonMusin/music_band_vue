<?php
require_once 'config.php';


$sql = "SELECT * FROM users";
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($rows);

$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$db_table = "users";

$sql = "INSERT INTO users (name, login, email, password) VALUES ('$fio', '$login', '$email', '$password')";
$sql_test = "SELECT * FROM users";
$test_requser = mysqli_query($link, $sql_test);
$data_of_coockies = $_COOKIE;
$data_of_products = "SELECT * FROM `products` ORDER BY `products`.`name` ASC";
$data_of_products_result = mysqli_query($link,$data_of_products);
$mass_of_products = array();
while($user = mysqli_fetch_assoc($data_of_products_result)) {
    //echo "{$user['name']}"; // Вроде ковычки забыли
    array_push($mass_of_products,$user['name']);
}
//echo $mass_of_products[2];
$products_keys_of_coockies = array_keys($data_of_coockies); //ключи продуктов из куки файлов


while($row = mysqli_fetch_array($test_requser))
{
    if ($row['login'] == $login){

      if ($row['password' == $password]){
      }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="basket.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

  
    <div class="container-fluid" id="app">
        <div class="header d-flex col-md-12  align-items-center">
            <div class="header_leftbar d-flex justify-content-lg-between align-items-center align-self-center">
                <p onclick="LeadMainPage()" style="font-weight: 800; font-size: 25px;">Music Band</p>
                <img src="images/logo.png" width="27" height="22" alt="" style="transform: rotate(-90deg);">
            </div>
            <div class="header_registration">
              <p class="btn" style="color: white;font-size: 32px;"><?php echo $_COOKIE['user_login']; ?></button>
              <button onclick="Logout()" class="btn" style="color: #fff; font-size: 22px;">Logout</button>
              <img src="images/basket.png" alt="asd" width="30" height="30">
              
            </div>
        </div>
        <div class="main_container mt-4">
            <div class="slider">
                <div class="title">
                    <p style="color: #fff;">Корзина</p>
                </div>


               
                <script>
                function getCookie(name) {
                    // Разбиваем строку cookie и получаем все отдельные пары имя = значение в массиве
                    var cookieArr = document.cookie.split(";");
                    
                    // Запускаем цикл по элементам массива
                    for(var i = 0; i < cookieArr.length; i++) {
                        var cookiePair = cookieArr[i].split("=");
                        
                        /* Удаляем пробелы в начале имени файла cookie
                        и сравниваем его с заданной строкой */        if(name == cookiePair[0].trim()) {
                            // Расшифровываем значения cookie и возвращаем
                            return decodeURIComponent(cookiePair[1]);
                        }
                    }
                    
                    // Возвращаем null, если не найдено
                    return null;
                }
                var t = getCookie('fender_statocaster');
                console.log(t);
                </script>
                <?
                 $coockie_keys = array_keys($_COOKIE);
                 foreach ($coockie_keys as $row){
                    $pieces = explode(",", $_COOKIE[$row]);
                     if (in_array($row,$mass_of_products)){
                         echo '
                                    <div class="basket_line mt-5">
                                <div class="basket_line_content">
                                    <div class="form-check" >
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" aria-label="...">
                                    </div>
                                    <div class="slider_content">
                                        <div class="img_background">
                                            <img src="images/goods_images/'.$row.'.png" alt="" style>
                                        </div>
                                    </div>
                                    <p class="good_description">'.$pieces[2].'</p>
                                    <p class="good_price">'.$pieces[0].'</p>
                                    <div class="count">
                                        <button class="btn btn-outline-warning minus" onclick="minus_command(this)">-</button>
                                        <p class="good_count">'.$pieces[1].'</p>
                                        <button class="btn btn-outline-success plus" onclick="plus_command(this)">+</button>
                                    </div>
                                </div>
                            </div>
                         
                         ';
                     }
                 }
                
                ?>
                <!-- <div class="basket_line mt-5">
                    <div class="basket_line_content">
                        <div class="form-check" >
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" aria-label="...">
                        </div>
                        <div class="slider_content">
                            <div class="img_background">
                                <img src="images/usilok.png" alt="" style>
                            </div>
                        </div>
                        <p>Текст, посвященный</p>
                        <p>200000 Р</p>
                        <div class="count">
                            <button>-</button>
                            <p>3</p>
                            <button>+</button>
                        </div>
                    </div>
                </div> -->
                <div class="payment mt-5">
                    <a href="creating_order.php"><button class="btn btn-primary">Оплатить</button></a>
                    <p>К оплате: 1000Р</p>
                </div>
            </div>
          
            <footer class="mt-5" >
                <div class="footer_content_1">
                    <p style="font-weight: 800; font-size: 26px;font-family:'New Rocker';">Music Band ©</p>
                </div>
                <div class="footer_content_3">
                    <img src="./images/facebook.png" alt="">
                    <img src="./images/vk.png" alt="">
                    <img src="./images/inst.png" alt="">
                    <img src="./images/twitter.png" alt="">
                </div>
             </footer>
     
      <div class="b-popup " id="popup1">
          <div class="b-popup-content col-md-6  col-md-6 col-sm-5  ">
              <div class="popup_content ">
                <div class="popup_content_change_type">
                  <div class="change_type">
                    
                    <div class="change_type_reg">
                      <p id="showreg" onclick="SetRegistrationView()">Регистрация</p>
                      <div class="dev"></div>
                    </div>
                    <div class="change_type_log">
                      <p id="showlog" onclick="SetLoginView()">Войти</p>
                      <div class="dev"></div>
                    </div>
                  <p style="position: relative; left: 135px;top: 1px; font-size: 20px; cursor: pointer"> <a class="link" style="text-decoration: none; color: #848484" href="">x</a></p>

                  </div>
                  <div class="type_content">
                    <div class="reg">
                      <form action="registration.php" method="POST">
                      <input name="fio" type="text" class="input" placeholder="ФИО">
                      <input name="login" type="login" class="input" placeholder="Логин">
                      <input name="email" type="email" class="input" placeholder="Электронная почта">
                      <input name="password" type="password" class="input" placeholder="Пароль">
                      <input name="try_password" type="password" class="input" placeholder="Повтор пароля">
                      <button type="submit" class="btn col-lg-3 offset-4">Регистрация</button>
                      </form>
                      
                    </div>
                    
                    <form action="">
                      <div class="log">
                        <input type="text" class="input" placeholder="Логин">
                        <input type="text" class="input" placeholder="Пароль">
                        <button class="btn col-lg-3 offset-4">Войти</button>
                      </div>

                    </form>
                    
                </div>
                </div>
                
              </div>
          </div>
      </div>
      </div>

    <script src="https://unpkg.com/vue@next"></script>
    <script src="app.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="error_event.js"></script>
    <script>
      function login_or_pass_err(header){
          //Логин или пароль не существует
          alert("Такого логина или пароля не существует");
          setTimeout(function(){
              window.location.href = header;
            }, 1000);
      }
        $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        $("#popup1").hide();
        SetRegistrationView();
        });
        function PopupLogin(){
          PopUpShow();
          SetLoginView();
        }
        //Функция отображения PopUp
        function PopUpShow(){
            $("#popup1").show();
            $(".b-popup").css("display", "block");
        }
        function Logout(){
            location.href = "index.php";
        }
        //Функция скрытия PopUp
        function PopUpHide(){
            $("#popup1").hide();
        }
        $(function () {
        var target = null;
          $(':input').focus(function() {
            target = $(this).val();
          });
          // НЕ ПЕРЕНОСИТЕ ЭТОТ ФРАГМЕНТ В SUBMIT
        
        // $('form').submit( function () {
          
        //   if ( target == 'save' ) {
        //     alert('[Save] is pressed')
        //   } else if ( target == 'delete' ){
        //     alert('[Delete] is pressed')
        //   } else {
        //     alert('{unknown button is pressed}')
        //   }
        //   return false;
        // });
      });
       
          function SetRegistrationView(){
                $(".log").hide();
                $(".reg").show();
                $("#showreg").css("color", "#000");
                $("#showlog").css("color", "#ccc");
                
            }
          function SetLoginView(){
              $(".log").show();
              $(".reg").hide();
              $("#showlog").css("color", "#000");
              $("#showreg").css("color", "#ccc");
          }
  
    </script>
</body>

</html>