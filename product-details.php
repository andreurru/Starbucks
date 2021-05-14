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
			<img src="images/logo.png" width="125px">
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
				<li><a href="account.php">Account</a></li>
				<li><a href="findstores/searchStores.php">Find Store</a></li>

			</ul>
		</nav>
		<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
	</div>

	<!---- Product Details ---->

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="images/seasonal/seasonal1.jpg" width="100%">
			</div>
			<div class="col-2">
				<p>Productos/Productos de Temporada</p>
				<h1>Christmas Chocochip</h1>
				<h4>$60</h4>
				<select>
					<option>Tamaño</option>
					<option>Venti</option>
				</select>
				<input type="number" value="1">
				<a href="cart.php" class="btn">Agregar al carrito</a>
			</div>
		</div>
	</div>


	<!---- Other Products ---->

	<div class="small-container">
		<div class="row row-2">
			<h2>Productos Relacionados</h2>
			<p>Ver Todos</p>
		</div>
	</div>

	<div class="small-container">


		<div class="row">
			<div class="col-4">
				<img src="images/seasonal/seasonal1.jpg">
				<h4>Christmas Chocochip</h4>
				<p>$60.00</p>
			</div>
			<div class="col-4">
				<img src="images/seasonal/seasonal2.jpg">
				<h4>Vainilla Snow</h4>
				<p>$65.00</p>
			</div>
			<div class="col-4">
				<img src="images/seasonal/seasonal3.jpg">
				<h4>Santa's Chocolate</h4>
				<p>$60.00</p>
			</div>
			<div class="col-4">
				<img src="images/seasonal/seasonal4.jpg">
				<h4>Rudolph's nose</h4>
				<p>$65.00</p>
			</div>
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
