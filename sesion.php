<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      if(isset($_SESSION['user'])){
        echo "Sesion exitosa BIENVENIDO";
        echo $_SESSION['user'];
      }else{
        header("Location: login.php");
      }


     ?>

  </body>
</html>
