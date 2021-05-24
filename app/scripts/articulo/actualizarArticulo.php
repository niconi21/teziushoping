<!-- 
-Nombre proyecto: Teziushoping
-Creación: 04-05-2021
-FechaEntrega: 6 de Mayo de 2021
Autor: Nicolas Moreno Duran
-->
<?php

include("../../DataBases/conexion.php");
session_start();

//recibimos los datos por POST y los asignamos a una variable local
$idUsuario = $_SESSION['idUsuario'];
$nombre = $_POST['nombre'];
$idCategoria = $_POST['idCategoria'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$descripcion = $_POST['descripcion'];

echo 'idUsuario: '.$idUsuario.'<br>';
echo 'nombre: '.$nombre.'<br>';
echo 'idCategoria: '.$idCategoria.'<br>';
echo 'precio: '.$precio.'<br>';
echo 'cantidad: '.$cantidad.'<br>';
echo 'descripcion: '.$descripcion.'<br>';

$imagen = $_FILES['imagen']['name'];
$ext = explode('.', $imagen)[1];
$tamano = $_FILES['imagen']['size'];
$temp = $_FILES['imagen']['tmp_name'];
$milliseconds = round(microtime(true) * 1000);
echo $_SESSION['imagenProductoUpdate'];
if (isset($imagen) && $imagen != "") {
    if ($ext == "png" || $ext == "jpg" || $ext == "jpeg") {
        if ($tamano < 2000000) {
            if(isset($_SESSION['imagenProductoUpdate'])){
                
                unlink('/var/www/html/teziushoping/app/public/productos/'.$_SESSION['imagenProductoUpdate']);
                echo 'imagen eliminada';
            }
            echo 'imagen ';
            $milliseconds = round(microtime(true) * 1000);
            $imagen = $_SESSION['idUsuario'] . '-' . $_SESSION['usuario'] . '-' . $milliseconds . '.' . $ext;
            $ruta = '/var/www/html/teziushoping/app/public/productos/' . $imagen;
            if (!move_uploaded_file($temp, $ruta)) {
                $imagen = $_SESSION['imagen'];
                echo $imagen;
            }
        }
    }
}else{
    $imagen =$_SESSION['imagenProductoUpdate'];
    echo '<br>imagen almacenada en db: '. $imagen;    
}

try {
    echo 'idProducto' . $_SESSION['idProductoUpdate'];
    ///madamos los datos por el metodo EXECUTE
    $sql = $cn->prepare("UPDATE Publicaciones SET nombre=?, descripcion=?, precio=?, cantidad=?, imagen=?, id_categoria=? WHERE id=?");
    $resultado = $sql->execute([$nombre, $descripcion, $precio, $cantidad, $imagen, $idCategoria, $_SESSION['idProductoUpdate']]);
    if ($sql->rowCount() > 0) {
        unset($_SESSION['idProductoUpdate']);
        header('location: ../../views/pages/misPublicaciones.php?statusPut=200');
    } else {
        unset($_SESSION['idProductoUpdate']);
        $imagen =$_SESSION['imagenProductoUpdate'];
        
        // header('location: ../../views/pages/misPublicaciones.php?statusPut=400');
    }
} catch (Exception $e) {
    unset($_SESSION['idProductoUpdate']);
    echo "error en: " . $e;
    //depliega el error
}
?>