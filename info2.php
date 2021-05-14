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
		<?php
		include("conexion.php");

		$consulta="SELECT * FROM venta";
		$resultado=mysqli_query($conn,$consulta);

		$filas = mysqli_num_rows($resultado);
		?>
<?php
		if($filas == 1){
			echo "<a href= \"cart.php\"><img src=\"images/cart-full.png\" width=\"30px\" height=\"30px\"></a>";
		}else {
			echo "<a href= \"cart.php\"><img src=\"images/cart.png\" width=\"30px\" height=\"30px\"></a>";

		}

		 ?>

	</div>

	<!---- Product Details ---->

	<div class="small-container">

	<?php
      include("conexion.php");
      $Id = $_REQUEST['Id'];
      $query = "SELECT * FROM productos WHERE Id = '$Id'";
      $resultado = $con->query($query);
      $row = $resultado->fetch_assoc();
    ?>

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="data:image/jpg;base64, <?php echo base64_encode($row['Foto']);?>" width="100%">
			</div>
			<div class="col-2">
				<p>Productos/<?php echo $row['Categoria'];?></p>
				<h1><?php echo $row['NombreP']; ?></h1>
				<h4>$<?php echo $row['Precio']; ?></h4>
				<select>
					<option>Venti</option>
				</select>

				<a href = "agrega-carrito.php?Id=<?php echo $row['Id']; ?>" class="btn">Agregar al carrito</a>
			</div>
		</div>
	</div>

	</div>
	</div>

	<!---- Other Products ---->

	<div class="small-container">
		<div class="row row-2">
			<h2>Productos Relacionados</h2>
			<a href="allproducts.php"><p>Ver Todos</p></a>
		</div>
	</div>

	<div class="small-container">
		<div class="row">
			<?php
				include("conexion.php");
				switch ($row['Categoria']){
					case 'seasonal':
							switch ($row['NombreP']) {
								case 'Christmas Chocochip':
									$query = "SELECT * FROM productos WHERE Categoria=\"seasonal\" AND Id<>1 Order BY RAND()  LIMIT 3";
									break;
								case 'Vainilla Snow':
									$query = "SELECT * FROM productos WHERE Categoria=\"seasonal\" AND Id<>2 Order BY RAND()  LIMIT 3";
									break;
								case 'Santas Chocolate':
									$query = "SELECT * FROM productos WHERE Categoria=\"seasonal\" AND Id<>3 Order BY RAND()  LIMIT 3";
									break;
								case 'Rudolphs nose':
									$query = "SELECT * FROM productos WHERE Categoria=\"seasonal\" AND Id<>4 Order BY RAND()  LIMIT 3";
									break;
							}
							break;
					case 'food':
							switch ($row['NombreP']) {
								case 'Hamburguesa Clássica':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>5 Order BY RAND()  LIMIT 4";
									break;
								case 'Almond Croissant':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>6 Order BY RAND()  LIMIT 4";
									break;
								case 'Bacon Sandwich':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>7 Order BY RAND()  LIMIT 4";
									break;
								case 'Chocolatín':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>8 Order BY RAND()  LIMIT 4";
									break;
								case 'Sandwich Clássico':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>9 Order BY RAND()  LIMIT 4";
									break;
								case 'Dona Glaseada':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>10 Order BY RAND()  LIMIT 4";
									break;
								case 'Dona Capuchina':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>11 Order BY RAND()  LIMIT 4";
									break;
								case 'Almond Muffin':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>12 Order BY RAND()  LIMIT 4";
									break;
								case 'Dona de Chocolate':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>13 Order BY RAND()  LIMIT 4";
									break;
								case 'Muffin de Chocolate':
									$query = "SELECT * FROM productos WHERE Categoria=\"food\" AND Id<>14 Order BY RAND()  LIMIT 4";
									break;
							}
							break;
					case 'iced':
							switch ($row['NombreP']) {
								case 'Matcha Frappé':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>15 Order BY RAND()  LIMIT 4";
									break;
								case 'Iced Cold Coffee':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>16 Order BY RAND()  LIMIT 4";
									break;
								case 'Iced Cold Brew Coffee':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>17 Order BY RAND()  LIMIT 4";
									break;
								case 'Frozen Capuchino':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>18 Order BY RAND()  LIMIT 4";
									break;
								case 'Iced Horchata':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>19 Order BY RAND()  LIMIT 4";
									break;
								case 'Iced Matcha':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>20 Order BY RAND()  LIMIT 4";
									break;
								case 'Chocolate Frapuchino':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>21 Order BY RAND()  LIMIT 4";
									break;
								case 'Caramel Frappuchino':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>22 Order BY RAND()  LIMIT 4";
									break;
								case 'Iced Chocolate':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>23 Order BY RAND()  LIMIT 4";
									break;
								case 'Iced Refresher':
									$query = "SELECT * FROM productos WHERE Categoria=\"iced\" AND Id<>24 Order BY RAND()  LIMIT 4";
									break;
							}
							break;
					case 'coffee':
							switch ($row['NombreP']) {
								case 'Flat White':
									$query = "SELECT * FROM productos WHERE Categoria=\"coffee\" AND Id<>25 Order BY RAND()  LIMIT 4";
									break;
								case 'Latte Macchiato':
									$query = "SELECT * FROM productos WHERE Categoria=\"coffee\" AND Id<>26 Order BY RAND()  LIMIT 4";
									break;
								case 'Caramel Mocha':
									$query = "SELECT * FROM productos WHERE Categoria=\"coffee\" AND Id<>27 Order BY RAND()  LIMIT 4";
									break;
								case 'Americano':
									$query = "SELECT * FROM productos WHERE Categoria=\"coffee\" AND Id<>28 Order BY RAND()  LIMIT 4";
									break;
								case 'Mocha Blanco':
									$query = "SELECT * FROM productos WHERE Categoria=\"coffee\" AND Id<>29 Order BY RAND()  LIMIT 4";
									break;
								case 'Espresso':
									$query = "SELECT * FROM productos WHERE Categoria=\"coffee\" AND Id<>30 Order BY RAND()  LIMIT 4";
									break;
							}
							break;
				}
				//$query = "SELECT * FROM productos WHERE Categoria=\"food\" LIMIT 4";
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
