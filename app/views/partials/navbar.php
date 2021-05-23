<?php
session_start();

if(!isset($_SESSION['nombre'])){
  header('location: ../pages/login.php?status=403');
}
$uri = explode('/', $_SERVER['REQUEST_URI']);

$page = explode('.', $uri[sizeof($uri) - 1]);

$urls = array(
  "dashboard" => '<a>Dashboard</a>',
  "altaProducto" =>  '<a href="../pages/misPublicaciones.php">Mis publicaciónes</a> > Alta de Producto',
  "misPublicaciones" => "Mis Publicaciónes",
  "perfil" => "Mi Perfil",
  "misMetodosPago" => "Mis Métodos de pago",
  "altaMetodoPago" => '<a href="../pages/misMetodosPago.php">Mis métodos de pago</a> > Alta de método de pago',
  "misVentas" => 'Mis ventas',
  "misCompras" => 'Mis compras',
  "productosServicios" => 'Productos ó Servicios',
  "miCarrito" => 'Mi carrito',
  "compra" => 'Comprar productos',
  "usuarios" => 'Usuarios',

)

?>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-fondo fixed-top animate__animated animate__fadeInDown">
    <a class="navbar-brand" href="../pages/dashboard.php">

        <img src="../../assets/img/Logo Teziushopping.jpg" height="30" alt="" class="d-inline-block align-top"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo $page[0] == 'dashboard' ? 'active' : ''; ?>">
          <a class="nav-link" href="../pages/dashboard.php">Dashboard </a>
        </li>
        <li class="nav-item <?php echo $page[0] == 'misPublicaciones' ? 'active' : ''; ?>">
          <a class="nav-link" href="../pages/misPublicaciones.php">Mis publicaciónes</a>
        </li>
        <li class="nav-item <?php echo $page[0] == 'productosServicios'  ? 'active' : ''; ?>">
          <a class="nav-link" href="../pages/productosServicios.php">Productos/Servicios</a>
        </li>
        <?php
        if ($_SESSION['role'] == 'ADMIN_USER')
          echo '<li class="nav-item' . ($page[0] == 'usuarios'  ? 'active' : '') . '">
        <a class="nav-link" href="../pages/usuarios.php">Usuarios</a>
      </li>';
        ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Más Acciónes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../pages/misVentas.php">Ventas</a>
            <a class="dropdown-item" href="../pages/misCompras.php">Compras</a>
            <a class="dropdown-item" href="../pages/misMetodosPago.php">Métodos de pagos</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Perfil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../pages/perfil.usuario.php">Mi perfl</a>
            <a href="../../scripts/usuarios/logout.php" class=" dropdown-item text-danger"><i class="fa fa-sign-out" aria-hidden="true"></i>
              Cerrar sesión</a>

          </div>
        </li>



      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto/servicio" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar
        </button>
      </form>
      <a href="../pages/miCarrito.php" class="btn ml-2"><i class="fa fa-shopping-cart text-white fa-2x" aria-hidden="true"></i></a>

    </div>
  </nav>
  <div class="container mt-5">
    <div class="row">&nbsp;</div>
  </div>