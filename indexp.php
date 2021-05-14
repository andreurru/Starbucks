<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Starbucks | Proyecto Final</title>
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
		<div class="row">
			<div class="col-2">
				<h1>El Mejor Café, Sólo en<br>STARBUCKS</h1>
				<p>Desde 1971, siempre ha sido y siempre será de la mejor calidad. Nos apasiona la labor de abastecernos de los mejores granos de café arábicos siguiendo estrictos principios éticos y tostarlos con el máximo cuidado. <br>Nuestro café, nuestra pasión, sólo es comparable al placer de compartirlo.</p>

			</div>
			<div class="col-2">
				<img src="images/image1.png">
			</div>
		</div>
	</div>
	</div>

	<!----- categories ------>

	<div class="categories">
		<div class="small-container">
		<div class="row">
			<div class="col-31">
				<a href="coffee-category.php"><img src="images/category/category-1.jpg"></a>
				<h3 class="cat">Bebidas Calientes</h3>
			</div>
			<div class="col-32">
				<a href="iced-category.php"><img src="images/category/category-2.jpg"></a>
				<h3 class="cat">Bebidas Frías</h3>
			</div>
			<div class="col-33">
				<a href="food-category.php"><img src="images/category/category-3.jpg"></a>
				<h3 class="cat">Comida</h3>
			</div>
		</div>
		</div>
	</div>


	<!----- Temporada ------>
	<div class="small-container">
		<h2 class="title">Productos de Temporada</h2>
		<div class="row">

			<?php
			session_start();
			$_SESSION['usuario'] = $usuario;
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

	<!----- Anuncio ------>
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="images/covid.jpg" class="offer-img">
				</div>
				<div class="col-2">
					<p>Pidelo a tu casa o pasa por tu STARBUCKS</p>
					<h1>Buenas cosas están pasando</h1>
					<small>No sólo se trata de café, se trata de las personas y sobre cómo nutrimos el espíritu humano. En momentos de incertidumbre, partners (colaboradores) y clientes alrededor del mundo entregan todo su esfuerzo a través de acciones de generosidad, caridad, creatividad y resiliencia, que provoca que buenas cosas sigan pasando. Hasta hoy y gracias al esfuerzo de nuestros partner, hemos donado más de 5.9 toneladas de alimento, más de 45 mil bebidas a 72 instituciones, beneficiando a más de 29 mil personas a lo largo del país desde que comenzó COVID-19.</small>
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
					<img src="images/logo.png">
					<p>El Mejor Café, Sólo en STARBUCKS</p>
				</div>
				<div class="footer-col-3">
					<h3>Encuentranos también en:</h3>
					<ul>
						<li>Rappi:</li>
						<li>Uber Eats</li>
						<li>Postmates</li>
						<li></li>
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
