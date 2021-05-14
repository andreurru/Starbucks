<?php

  // Crear una conexión
  $con = mysqli_connect("localhost","root","root","game_pf");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "No se puede conectar a la base de datos: " . mysqli_connect_error();
  }
?>
