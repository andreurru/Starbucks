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
				<li><a href="account.php">MyAccount</a></li>
				<li><a href="findstores/searchStores.php">Find Store</a></li>

			</ul>
		</nav>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
	</div>

	<div class="small-container">

		<nav>
			<ul>


			</ul>
		</nav>

		<div class="row row-2">
			<h2>Ingrese producto</h2><br><br>

			<form action = "guardar.php" method = "POST" enctype = "multipart/form-data"><br><br>
        <input type = "text" placeholder = "Nombre" REQUIRED name = "Nombre"><br><br>
        <input type = "text" placeholder = "Descripcion" REQUIRED name = "Descr"><br><br>
        <input type = "file" name = "Foto"><br><br>
        <input type = "text" placeholder = "Categoria" REQUIRED name = "Categoria"><br><br>
        <input type = "text" placeholder = "Precio" REQUIRED name = "Precio"><br><br>
        <input type = "submit" value = "aceptar"><br><br>
      </form>


		</div>


		<div class="row">
				<?php
					include("conexion.php");

					$query = "SELECT * FROM productos";
					$resultado = $con->query($query);
					while($row = $resultado->fetch_assoc()){
				?>
				<div class="col-4">

					<img height = "200px"  src = "data:image/jpg;base64, <?php echo base64_encode($row['Foto']);?>"/>
					<h2><a href = "info2.php?Id=<?php echo $row['Id']; ?>"><?php echo $row['NombreP']; ?></a></h2>
					<p>$<?php echo $row['Precio']; ?></p>

				</div>
				<?php
					}
				?>
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
					<img src="images/logo.png">s
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
						<li>Instagram</li>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>LINK SORPRESA!</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
