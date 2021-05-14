<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>All Products | Proyecto Final</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
</head>
<body>

	<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="indexp.php"><img src="images/logo.png" width="125px"></a>
		</div>

		<nav>
			<ul>
				<?php
				session_start();
				$us = $_SESSION['user'];
				echo "<li>", $_SESSION['user'],"</li>";
				?>
				<li></li>
				<li></li>
				<li><a href="indexp.php">Home</a></li>
				<li><a href="allproducts.php">Productos</a></li>
				<li><a href="findstores/searchStores.php">Find Store</a></li>
				<li><a href="account.php">My Account</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</nav>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
	</div>

	<!----- Categorías ------>

	<div class="categories">
		<div class="small-container">
      <?php
        include("conexion.php");
        $Id = $_REQUEST['Id'];
        $query = "SELECT * FROM productos WHERE Id = '$Id'";
        $resultado = $con->query($query);
        $row = $resultado->fetch_assoc();
      ?>
      <center>
        <br><br><br><br>
        <form action = "modificar2.php?Id=<?php echo $row['Id'];?>" method = "POST" enctype = "multipart/form-data"><br><br>
          <input type = "text" placeholder = "Nombre" REQUIRED name = "Nombre" value = "<?php echo $row['NombreP'] ?>"><br><br>
          <input type = "text" placeholder = "Descripcion" REQUIRED name = "Descr" value = "<?php echo $row['Descr'] ?>"><br><br>
          <img height = "200px"  src = "data:image/jpg;base64, <?php echo base64_encode($row['Foto']);?>"/><br><br>
          <input type = "file" name = "Foto"><br><br>
          <input type = "text" placeholder = "Categoria" REQUIRED name = "Categoria" value = "<?php echo $row['Categoria'] ?>"><br><br>
          <input type = "text" placeholder = "Precio" REQUIRED name = "Precio" value = "<?php echo $row['Precio'] ?>"><br><br>
          <input type = "submit" value = "aceptar"><br><br>
        </form>
      </center>
    </body>
     <p><a href="account.php" class="btn btn-info" role="button">Regresar</a></p>
		</div>
	</div>
</div>

	<!----- Footer ------>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Descarga nuestra App</h3>
					<p>Download App for Android and ios mobile phone.</p>
					<div class="app-logo">
						<img src="images/stores/playstore.png">
						<img src="images/stores/appstore.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/logo.png">
					<p>El Mejor Café, Sólo en STARBUCKS</p>
				</div>
				<div class="footer-col-3">
					<h3>Encuentranos también en:</h3>
					<ul>
						<li>Rappi:</li>
						<li>Uber Eats</li>
						<li>Postmates</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Síguenos</h3>
					<ul>
						<a href="https://www.instagram.com/starbucksmex/"><li>Instagram</li></a>
						<a href="https://www.facebook.com/Starbucks"><li>Facebook</li></a>
						<a href="https://twitter.com/Starbucks?s=20"><li>Twitter</li></a>
						<a href="https://www.youtube.com/watch?v=BjDebmqFRuc"><li>LINK SORPRESA!</li></a>
					</ul>
				</div>
		</div>
		</div>
	</div>
</body>
</html>
