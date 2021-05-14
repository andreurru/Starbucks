<?php
  include("conexion.php");

  $Nombre = $_POST['Nombre'];
  $Descr = $_POST['Descr'];
  $Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
  $Categoria = $_POST['Categoria'];
  $Precio = $_POST['Precio'];
  $Id = $_REQUEST['Id'];

  $sql = "UPDATE productos SET NombreP = '$Nombre',Descr = '$Descr', Foto = '$Foto', Categoria = '$Categoria', Precio = '$Precio' WHERE Id = '$Id' ";


  if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
  }else{
    header("Location: mostrarp.php");

  }


?>
