<?php
$tipo = $_GET['tipo'];
$nombre = $_GET['nombre'];
$url = '';
switch ($tipo) {
    case 'usuario':
        $url = '../scripts/usuarios/EliminarUsuarios.php';
        $tipo = 'al usuario';
        break;
    case 'metodoPago':
        $url = '../scripts/Pedidos/EliminarMetodoPago.php';
        $tipo = 'al método de pago';
        break;
    case 'articulo':
        $url = '../scripts/Catalogo/EliminarArticulo.php';
        $tipo = 'al artículo';
        break;
    case 'vendedor':
        $url = '../scripts/administrador/bajaVendedor.php';
        $tipo = 'al vendedor';
        break;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>

<body>
    <div class="formulario">

        <h1>Confirmación</h1>
        <div class="container">
            <h4>Estás seguro que deseas elimnar <?php echo $tipo; ?> llamado <?php echo $nombre; ?></h4>
            <div class="text-center">
                <a href="<?php echo $url ?>" class="btn btn-success">Eliminar</a>
                <a href="<?php echo '../../index.html'?>" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </div>
</body>

</html>