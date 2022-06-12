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


$peremennaya = 0;
$sql = "INSERT INTO users (name, login, email, password) VALUES ('$fio', '$login', '$email', '$password')";
$sql_test = "SELECT * FROM users";
$test_requser = mysqli_query($link, $sql_test);
while($row = mysqli_fetch_array($test_requser))
{
    if ($row['login'] == $login){
        echo 'такой пользователь уже есть';
        $peremennaya = 1;
    }
}
if ($peremennaya == 0){
        echo 'наман, создаем...';
        if (mysqli_query($link, $sql)) {
            header("Location:index.php");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
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

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid" id="app">
        <div class="header d-flex col-md-12  align-items-center">
            <div class="header_leftbar d-flex justify-content-lg-between align-items-center align-self-center">
                <p style="font-weight: 800; font-size: 25px;">Music Band</p>
                <img src="images/logo.png" width="27" height="22" alt="" style="transform: rotate(-90deg);">
            </div>
            <div class="header_registration">
              <p class="btn" style="color: #fff;font-size: 22px;"><?php echo $fio; ?></button>
              <button onclick="Logout()" class="btn" style="color: #fff; font-size: 22px;">Logout</button>
            </div>
        </div>
        <div class="main_container mt-4">
        <div class="slider">
                <div class="title">
                    <p style="color: #fff;">Most Popular</p>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="do_slider mt-4">
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar1.png" alt="" style>
                        </div>
                          <p>Fender Stratocaster 1985</p>
                          <div class="slider_img_content">
                            <p>1200$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar2.png" alt="" style>
                        </div>
                          <p>Fender Telecaster 1974</p>
                          <div class="slider_img_content">
                            <p>2500$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar3.png" alt="" style>
                        </div>
                          <p>Gibson Les Paul 1980</p>
                          <div class="slider_img_content">
                            <p>2800$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar4.png" alt="" style>
                        </div>
                          <p>Gibson SG Standart </p>
                          <div class="slider_img_content">
                            <p>2000$</p>
                          </div>
                        </div>
                    </div>
                  
                    </div>
                   
                    <div class="carousel-item">
                      <div class="do_slider mt-4">
                      <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar1.png" alt="" style>
                        </div>
                          <p>Fender Stratocaster</p>
                          <div class="slider_img_content">
                            <p>1200$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar2.png" alt="" style>
                        </div>
                          <p>Fender Telecaster 1974</p>
                          <div class="slider_img_content">
                            <p>2500$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar3.png" alt="" style>
                        </div>
                          <p>FGibson Les Paul 1980r</p>
                          <div class="slider_img_content">
                            <p>2800$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar4.png" alt="" style>
                        </div>
                          <p>Gibson SG Standart </p>
                          <div class="slider_img_content">
                            <p>2000$</p>
                          </div>
                        </div>
                    </div>
                   
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                
            </div>
            <p style="font-family: 'New Rocker';font-style: normal;font-weight: 400;font-size: 42px; color:white" class="mt-5 ml-5">About Us </p>
            
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
    <script>
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