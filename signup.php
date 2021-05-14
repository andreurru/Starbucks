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
  </div>

  <!----- Account-page ------>

  <div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <img src="images/image1.png" width="1000%">
        </div>

        <div class="col-2">
        <!--  <div class="form-container"> -->
            <div class="form-btn">
              <h2><a href="signup.php"><span>Register</span></a></h2>
              <br>
              <h4><a href="login.php"><span class="reg" color="#067000">or Login</span></a></h4>
              <!--<hr id="indicator">-->
            </div>

            <?php
              $servername = "localhost";
              $username = "root";
              $password = "root";
              $dbname = "game_pf";

              $email = $_POST['user'];
              $pwd = $_POST['contra'];

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              if(isset($_POST['save'])){
                $sql = "INSERT INTO usuarios (NombreU, Correo, Contraseña, Direccion, Ntarjeta, Cpostal) VALUES ('".$_POST["user"]."','".$_POST["email"]."','".$_POST["contra"]."', '".$_POST["direccion"]."', '".$_POST["ntarjeta"]."', '".$_POST["cpostal"]."')";
              }

              if ($conn->query($sql) === TRUE) {
              } else {
              }
            ?>
            <form id="regform" method="POST">
              <input type="text" name="user" placeholder="Nombre de Usuario">
              <input type="email" name="email" placeholder="Email">
              <input type="password" name="contra" placeholder="Contraseña">
              <input type="text" name="direccion" placeholder="Direccion">
              <input type="text" name="ntarjeta" placeholder="Numero de tarjeta">
              <input type="text" name="cpostal" placeholder="Codigo postal">
              <button type="submit" class="btn" name="save">Registrar</button>
            </form>

        <!--  </div>-->
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
