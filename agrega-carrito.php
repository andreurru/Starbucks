<?php
  include("conexion.php");
  session_start();
    $Id = $_REQUEST['Id'];

$us = $_SESSION['user'];

  if(isset($_SESSION['user'])){

    $sql = "INSERT INTO venta (Id_producto, Usern) SELECT Id, '$us' FROM productos WHERE id = '$Id';";
    echo $_SESSION['user'];
  }else{
    header("Location: login.php");
  }






  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }else{
    header("Location: allproducts.php");
  }


?>
