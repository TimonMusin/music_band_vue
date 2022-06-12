<?php
session_start();
require_once 'config.php';


$sql = "SELECT * FROM users";
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$_SESSION['user_login'] = $_POST['login'];
$_SESSION['user_password'] = $_POST['password'];
if (!isset($_COOKIE['user_login']) && !isset($_COOKIE['user_password']))
{
  setcookie('user_login',$_SESSION['user_login'],time() + (1000)); 
  setcookie('user_password',$_SESSION['user_password'],time() + (1000));
}
 


$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$db_table = "users";
var_dump('');
$peremennaya = 0;
$sql = "INSERT INTO users (name, login, email, password) VALUES ('$fio', '$login', '$email', '$password')";
$sql_test = "SELECT * FROM users";
$test_requser = mysqli_query($link, $sql_test);
while($row = mysqli_fetch_array($test_requser))
{
  if (isset($_COOKIE['user_login']) && isset($_COOKIE['user_password']))
  {
    if ($_COOKIE['user_login'] == $row['login'] && $_COOKIE['user_password'] == $row['password'] )
    {
      $peremennaya = 1;
       break;
    }
  }
  if ($row['login'] == $login){

    if ($row['password' == $password]){
      $peremennaya = 1;
      $_SESSION['user_login'] = $_POST['login'];
      $_SESSION['user_password'] = $_POST['password'];
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
    <link rel="stylesheet" href="on_hover.css">
    <link rel="stylesheet" href="popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="autoriz.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <?
  if ($peremennaya == 0){
    echo "  <script>
    alert('Такого логина или пароля не существует');
    setTimeout(function(){
        window.location.href = 'index.php';
      }, 500);
   </script>   ";
  }
  else{
    //Do stuff
  }
  
  
  ?>
  
    <div class="container-fluid" id="app">
        <div class="header d-flex col-md-12  align-items-center">
            <div class="header_leftbar d-flex justify-content-lg-between align-items-center align-self-center">
                <p onclick="LoadHome()" class="text_color_black" style="font-weight: 800; font-size: 25px;">Music Band</p>
                <img src="images/logo.png" width="27" height="22" alt="" style="transform: rotate(-90deg);">
            </div>
            <div class="header_registration">
              <p class="btn scale_12" style="color: white;font-size: 32px;"><?php echo $_COOKIE['user_login']; ?></button>
              <button onclick="Logout()" class="btn scale_12" style="color: #fff; font-size: 22px;">Logout</button>
              <img onclick="ToTheBasket()" class="scale_12" src="images/basket.png" alt="asd" width="30" height="30">
              
            </div>
        </div>
        <div class="main_container mt-4">
        <div class="slider">
       
                <div class="title">
                    <p style="color: #fff;">Доступные товары</p>
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
                          <div class="slider_img_content" onclick="CreateCoockie('fender_stratocaster', [1200, 5, 'Fender Stratocaster (или Strat) — модель электрогитары, разработанной Джорджем Фуллертоном, Лео Фендером и Фредди Таваресом в 1954 году и выпускаемой вплоть до настоящего времени'])">
                            <p>1200$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar2.png" alt="" style>
                        </div>
                          <p>Fender Telecaster 1974</p>
                          <div class="slider_img_content" onclick="CreateCoockie('fender_telecaster', [2500, 9, 'Fender Telecaster — электрогитара со сплошным корпусом и двумя звукоснимателями, изготовленная компанией Fender. Её простая, но эффективная конструкция и революционное звучание задали новые направления в изготовлении электрогитар и популярной музыке. Представленная для распространения как Broadcaster осенью 1949 г., это была первая гитара подобного рода, производившаяся в значительных масштабах'])">
                            <p>2500$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar3.png" alt="" style>
                        </div>
                          <p>Gibson Les Paul 1980</p>
                          <div class="slider_img_content" onclick="CreateCoockie('gibson_les_paul', [2800, 5,'Gibson Les Paul — первая электрогитара с цельным корпусом от компании Gibson, один из символов рок-музыки и одна из самых долгоживущих и популярных моделей музыкальных инструментов в мире. Модель была разработана в начале 1950 года Тедом Маккарти совместно с гитаристом Лесом Полом. Первый Gibson Les Paul был продан в 1952 году'])">
                            <p>2800$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar4.png" alt="" style>
                        </div>
                          <p>Gibson SG Standart </p>
                          <div class="slider_img_content" onclick="CreateCoockie('gibson_sg', [2500, 10, 'Gibson SG — электрогитара, созданная компанией Gibson на основе гитары Gibson Les Paul в 1961 году'])">
                            <p>2000$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/pedal.png" alt="" style>
                        </div>
                          <p>Fender Dual Marine</p>
                          <div class="slider_img_content" onclick="CreateCoockie('pedal', [500, 12, 'Педаль — важнейший элемент пазла, формирующего звучание гитары'])">
                            <p>500$</p>
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
                          <div class="slider_img_content" onclick="CreateCoockie('fender_stratocaster', [1200, 5, 'Fender Stratocaster (или Strat) — модель электрогитары, разработанной Джорджем Фуллертоном, Лео Фендером и Фредди Таваресом в 1954 году и выпускаемой вплоть до настоящего времени'])">
                            <p>1200$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar2.png" alt="" style>
                        </div>
                          <p>Fender Telecaster 1974</p>
                          <div class="slider_img_content" onclick="CreateCoockie('fender_telecaster', [2500, 9, 'Fender Telecaster — электрогитара со сплошным корпусом и двумя звукоснимателями, изготовленная компанией Fender. Её простая, но эффективная конструкция и революционное звучание задали новые направления в изготовлении электрогитар и популярной музыке. Представленная для распространения как Broadcaster осенью 1949 г., это была первая гитара подобного рода, производившаяся в значительных масштабах'])">
                            <p>2500$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar3.png" alt="" style>
                        </div>
                          <p>FGibson Les Paul 1980r</p>
                          <div class="slider_img_content" onclick="CreateCoockie('gibson_les_paul', [2800, 5, 'Gibson Les Paul — первая электрогитара с цельным корпусом от компании Gibson, один из символов рок-музыки и одна из самых долгоживущих и популярных моделей музыкальных инструментов в мире. Модель была разработана в начале 1950 года Тедом Маккарти совместно с гитаристом Лесом Полом. Первый Gibson Les Paul был продан в 1952 году'])">
                            <p>2800$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/guitar4.png" alt="" style>
                        </div>
                          <p>Gibson SG Standart </p>
                          <div class="slider_img_content" onclick="CreateCoockie('gibson_sg', [2500, 10, 'Gibson SG — электрогитара, созданная компанией Gibson на основе гитары Gibson Les Paul в 1961 году'])">
                            <p>2000$</p>
                          </div>
                        </div>
                        <div class="slider_content">
                          <div class="img_background">
                          <img src="images/usilok.png" alt="" style>
                        </div>
                          <p>Fender Super Sonic</p>
                          <div class="slider_img_content" onclick="CreateCoockie('usilok', [800, 5, 'Гитарный усилитель (разг. усилитель, усилок, комбик) — это электронный усилитель, предназначенный для использования совместно с электрическими и электронными музыкальными инструментами, в частности, электрогитарами'])">
                            <p>2200$</p>
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
      <div class="popup_of_disabled_click" name="event_slide"> 
        <p>Товар успешно добвален</p>
      </div>
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
      function ToTheBasket(){
        window.location.href = 'basket.php';
      }
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