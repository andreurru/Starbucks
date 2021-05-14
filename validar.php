<?php
  session_start();

  $usuario = $_POST['user'];
  $pass = $_POST['pass'];
  include("conexion.php");


  $proceso = mysqli_query($con,"SELECT * FROM usuarios WHERE NombreU = '$usuario' AND Contraseña = '$pass'");

  if($resultado = mysqli_fetch_array($proceso)){
    $_SESSION['user'] = $usuario;
    header("Location: account.php");
  }else{
    header("Location: login.php");
  }


?>
