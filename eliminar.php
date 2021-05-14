<?php
  include("conexion.php");

  $Id = $_REQUEST['Id'];

  $sql = "DELETE FROM productos  WHERE Id = '$Id' ";


  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }else{
    header("Location: mostrarp.php");

  }
?>
