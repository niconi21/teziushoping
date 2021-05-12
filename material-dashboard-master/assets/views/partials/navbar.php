<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);

$page = explode('.', $uri[sizeof($uri) - 1]);

$urls = array(
  "dashboard" => '<a>Dashboard</a>',
  "altaProducto" =>  '<a href="../pages/misPublicaciones.php">Mis publicaciónes</a> > Alta de Producto',
  "misPublicaciones" => "Mis Publicaciónes",
  "perfil" => "Mi Perfil",
  "misMetodosPago" => "Mis Métodos de pago",
  "altaMetodoPago" => '<a href="../pages/misMetodosPago.php">Mis métodos de pago</a> > Alta de método de pago',
  )

?>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fied-plugin animate__animated animate__fadeInDown">
    <a class="navbar-brand" href="../pages/dashboard.php">
      <i class="fa fa-shopping-bag" aria-hidden="true"></i>

      Teziushoping</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../pages/dashboard.php">Dashboard </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/misPublicaciones.php">Mis publicaciónes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Ventas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/misMetodosPago.php">Métodos de pagos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Productos/Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/perfil.usuario.php">Mi perfl</a>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto/servicio" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar
        </button>
      </form>
    </div>


  </nav>

  