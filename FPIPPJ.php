<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulario1</title>
</head>
<body>
  <!-- Empieza el navbar -->
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"> <img src="logo.png" width="50px">   AmongUstrike</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Tu empresa de confianza</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Index.html">Página principal</a>
                </li>

                <!-- Dropdown categorías -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorías
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Autos</a></li>
                    <li><a class="dropdown-item" href="#">Peluches</a></li>
                    <li><a class="dropdown-item" href="#">Armas (de juguete)</a></li>
                    <li><a class="dropdown-item" href="#">Juegos de mesa</a></li>
                  </ul>
                </li>
                
                <!-- Dropdown productos -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="FPIPPJ.php">Añadir productos</a></li>
                    <li><a class="dropdown-item" href="#">Eliminar productos</a></li>
                    <li><a class="dropdown-item" href="#">Modificar productos</a></li>
                  </ul>
                </li>
                   <li class="nav-item">
                    <a class="nav-link" href="https://youtu.be/DSG53BsUYd0">¿Tienes problemas con la página? Contáctenos</a>
                  </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <br>
<!-- Termina el navbar -->

    <form method="post">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Nombre del producto</label>
          <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="Nombre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputDescription" class="form-label">Descripción del producto</label>
          <input type="text" class="form-control" id="exampleInputDescription" name="Descripción">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Precio del producto</label>
            <input type="number" class="form-control" id="exampleInputPrice" name="Precio" required>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagen del producto</label>
            <input class="form-control" type="file" id="formFile" accept="image/*" name="Imagen" required>
          </div>
          <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categoría
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Juguetes para niños</a></li>
              <li><a class="dropdown-item" href="#">Juguetes para niñas</a></li>
              <li><a class="dropdown-item" href="#">Juegos de mesa</a></li>
            </ul>
          </div> <br>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Marcas
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">LEGO</a></li>
              <li><a class="dropdown-item" href="#">NERF</a></li>
              <li><a class="dropdown-item" href="#">HASBRO</a></li>
              <li><a class="dropdown-item" href="#">THE POKEMON COMPANY</a></li>
              <li><a class="dropdown-item" href="#">AMONGUSTRIKE</a></li>
              <li><a class="dropdown-item" href="#">HOTWHEELS</a></li>
            </ul>
          </div> <br> -->

        <button type="submit" class="btn btn-primary" name = "enviar">Añadir producto</button>
     
</form>

<p>Datos de la tabla</p>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Imagen</th>
		</tr>
		</thead>
    <tbody>

    
<?php 
include ("conexion.php");
$consulta = "SELECT * from productos";
$juguetes = mysqli_query($conexion, $consulta);

while ($row = $juguetes -> fetch_assoc()){
  echo "<tr>";
  echo "<td>" . $row ["ID"] . "</td>";
  echo "<td>" . $row ["Nombre"] . "</td>";
  echo "<td>" . $row ["Descripción"] . "</td>";
  echo "<td>" . $row ["Precio"] . "</td>";
  echo "<td>";
  echo '<img height="80" width="80" src="' . $row["Imagen"] . '"/>';
  echo "</td>";
  echo "</tr>";
 }
  ?>
    </tbody>
</table>


      <a href="Index.php"><br>
      <button class="btn btn-secondary">Atras</button>
      </a>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php

include("registrarProducto.php")

?>