<?php
  include("conexion.php");

  $Idd = $_REQUEST['id'];

  $sql = "DELETE FROM venta WHERE  id = '$Idd'";


  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }else{
    header("Location: cart.php");

  }
?>
