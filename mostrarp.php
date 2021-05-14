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
      <center>
        <table border= "1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Foto</th>
              <th>Categoria</th>
              <th>Precio</th>
              <th>Cambiar</th>
              <th>Borrar</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include("conexion.php");

              $query = "SELECT * FROM productos";
              $resultado = $con->query($query);
              while($row = $resultado->fetch_assoc()){
            ?>
              <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['NombreP']; ?></td>
                <td><?php echo $row['Descr']; ?></td>
                <td><div align = "center"><img height = "200px"  src = "data:image/jpg;base64, <?php echo base64_encode($row['Foto']);?>"/></div></td>
                <td><?php echo $row['Categoria']; ?></td>
                <td><?php echo $row['Precio']; ?></td>
                <td><a href = "modificar.php?Id=<?php echo $row['Id']; ?>">Modificar</a></td>
                <td><a href = "eliminar.php?Id=<?php echo $row['Id']; ?>">Borrar</a></td>
              </tr>
              <?php
                }
              ?>
          </tbody>
        </table>
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
