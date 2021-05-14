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
				<li><a href="signup.php">Sign Up</a></li>
			</ul>
		</nav>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
	</div>

	<!----- Categorías ------>

	<div class="small-container">
		<div class="row row-2">
			<h2>Bebidas de Temporada</h2>

			<nav>
			<ul>
				<li><a href="coffee-category.php">Bebidas Calientes</a></li>
				<li><a href="iced-category.php">Bebidas Frías</a></li>
				<li><a href="food-category.php">Comida</a></li>
				<li><a href="seasonal-category.php">Bebidas de Temporada</a></li>

			</ul>
		</nav>

		</div>

	<div class="row">

			<?php
				include("conexion.php");

				$query = "SELECT * FROM productos WHERE Categoria=\"seasonal\"";
				$resultado = $con->query($query);
				while($row = $resultado->fetch_assoc()){
			?>

			<div class="col-4">

				<a href = "info2.php?Id=<?php echo $row['Id']; ?>"><img height = "200px"  src = "data:image/jpg;base64, <?php echo base64_encode($row['Foto']);?>"/></a>
				<h4><a href = "info2.php?Id=<?php echo $row['Id']; ?>"><?php echo $row['NombreP']; ?></a></h4>
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
