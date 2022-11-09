
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/template.css">
    
</head>
<body>
    <nav></nav>
<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
      <li><a class="menu__item" href="index.php">Home</a></li>
      <li><a class="menu__item" href="AboutMe.php">About-Me</a></li>
      <li><a class="menu__item" href="CMSPage.php">CMS</a></li>
    </ul>
  </div>
        
        <?php         
        /*  kijkt als de gebruiker is ingelogd   */                   
        if($_SESSION == true)
            {    
                /*  zorgt ervoor dat als de knop word ingedrukt, de functie aangeroepen wordt  */
                    if(array_key_exists('Logout', $_POST)) {
                        logout();
                    }           
            echo  '<form method="post" class="formcss">';
            echo       '<input type="submit" name="Logout"';
            echo              'class="uitlogbttn" value="Logout" />';
            echo   '</form>';                       
            }
            /*  stopt de sessie   */
      function logout(){
        session_destroy();
        unset($_SESSION['login']);
        header('Location: login.php');
      }
      if($_SESSION == false)
      {          
              if(array_key_exists('login', $_POST)) {
                  login();
              }           
      echo  '<form method="post" class="formcss">';
      echo       '<input type="submit" name="login"';
      echo              'class="uitlogbttn" value="login" />';
      echo   '</form>';                       
      }   

function login(){
  header('Location: login.php');
}
    ?>    
    </nav>  
<!-- laat de view in waar wat tussen de footer en de nav bar komt te staan  --> 
    <?php
        if(isset($view) && file_exists("Views/".$view))
        {
            require_once "Views/". $view;
        }
    ?>
        <!-- de footer  --> 
     <div class="footer">
        <span class="foot-l"><b>Contact gegevens:</b></span>
        </br>  
        <span class="foot-l2"><b>E-mail: fabiobraker2@gmail.com</b></span>
        </br>  
        <span class="foot-l3"><b>Telefoon nummer: +31 6 44997778</b></span>
        <span class="foot-r"><b>Copyright ©Fabio 2022 </b></span>
    </div>
</body>
</html>