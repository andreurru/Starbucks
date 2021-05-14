<?php
  include("conexion.php");

  $Nombre = $_POST['Nombre'];
  $Descr = $_POST['Descr'];
  $Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
  $Categoria = $_POST['Categoria'];
  $Precio = $_POST['Precio'];

  $sql = "INSERT INTO productos(NombreP, Descr, Foto, Categoria, Precio )
          VALUES ('$Nombre', '$Descr', '$Foto', '$Categoria', '$Precio');";


  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }else{
    header("Location: allproducts.php");
  }

?>
