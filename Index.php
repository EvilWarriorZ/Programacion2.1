<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>AmongUstrike</title>
</head>
<body>
  
  <!-- Empieza el navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"> <img src="logo.png" width="50px">   AmongUstrike</a>
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
      <!-- Termina el navbarxde -->

      <div class="card-group">
  <div class="card">
    <img src="XD.jpg" width="500px" height="400px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Juguetes de Bajoterra (originales)</h5>
      <p class="card-text">$2750</p>
      <p class="card-text"><small class="text-body-secondary">Solo calidad</small></p>
    </div>
  </div>
  <div class="card">
    <img src="pikachu.jpg" width="500px" height="400px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pikachu</h5>
      <p class="card-text">$600</p>
      <p class="card-text"><small class="text-body-secondary">Figurita oficial</small></p>
    </div>
  </div>
  <div class="card">
    <img src="patoys_1.jpg" width="500px" height="400px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Patos de goma</h5>
      <p class="card-text">$1200 (cada unidad)</p>
      <p class="card-text"><small class="text-body-secondary">Bien facha</small></p>
    </div>
  </div>
</div>
<br>
<div class="card-group">
<div class="card">
<img src="logo.png" width="500px" height="400px" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Más próximamente...</h5>
<p class="card-text"></p>
<p class="card-text"><small class="text-body-secondary"></small></p>
</div>
</div>
<div class="card">
<img src="logo.png" width="500px" height="400px" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Más próximamente...</h5>
<p class="card-text"></p>
<p class="card-text"><small class="text-body-secondary"></small></p>
</div>
</div>
<div class="card">
<img src="penguino.jpg" width="500px" height="400px" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Pinguinos de club penguin</h5>
<p class="card-text">$1250 cada uno</p>
<p class="card-text"><small class="text-body-secondary">Son god</small></p>
</div>
</div>
<div class="card-group">
  <div class="card">
  <img src="amogas.jpg" width="500px" height="400px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Legos de Among Us</h5>
  <p class="card-text">$1750 (cada 4 unidades)</p>
  <p class="card-text"><small class="text-body-secondary">Sospechosos</small></p>
  </div>
  </div>
  <div class="card">
  <img src="bleyblade.jpeg" width="500px" height="400px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Beyblade</h5>
  <p class="card-text">$1000</p>
  <p class="card-text"><small class="text-body-secondary">Giros en grandes cantidades</small></p>
  </div>
  </div>
  <div class="card">
  <img src="nerfonada2.jpg" width="500px" height="400px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Nerf gigante</h5>
  <p class="card-text">$125000</p>
  <p class="card-text"><small class="text-body-secondary">Potente</small></p>
  </div>
  </div>
  <br>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>