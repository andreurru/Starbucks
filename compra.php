<?php
  include("conexion.php");


  $sql = "INSERT INTO historial
(Id_producto, Usern)
SELECT Id_producto, Usern
FROM venta";

  $sql2 = "DELETE FROM venta;";


  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }else{
    header("Location: indexp.php");
  }

  if (!mysqli_query($con,$sql2)) {
    die('Error: ' . mysqli_error($con));
  }

?>
