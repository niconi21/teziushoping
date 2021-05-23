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

$imagen = $_FILES['imagen']['name'];
$ext = explode('.', $imagen)[1];
$tamano = $_FILES['imagen']['size'];
$temp = $_FILES['imagen']['tmp_name'];
$milliseconds = round(microtime(true) * 1000);
$imagen = $_SESSION['idUsuario'] . '-' . $nombre . '-' . $milliseconds . '.' . $ext;

if ($ext == "png" || $ext == "jpg" || $ext == "jpeg") {
    if ($tamano < 2000000) {
        $milliseconds = round(microtime(true) * 1000);
        $imagen = $_SESSION['idUsuario'] . '-' . $_SESSION['usuario'] . '-' . $milliseconds . '.' . $ext;
        $ruta = '/var/www/html/teziushoping/app/public/productos/' . $imagen;
        if (move_uploaded_file($temp, $ruta)) {
            try {
                $sql = $cn->prepare("INSERT INTO Publicaciones(
                nombre,descripcion,precio,cantidad,imagen,id_categoria,id_usuario
                ) VALUES (
                ?, ?, ?, ?, ?, ?, ?)");
                $resultado = $sql->execute([$nombre, $descripcion, $precio, $cantidad, $imagen, $idCategoria, $idUsuario]);
                if ($sql->rowCount() > 0)
                    header('location: ../../views/pages/misPublicaciones.php?statusPost=200');
                else
                    header('location: ../../views/pages/misPublicaciones.php?statusPost=400');
            } catch (Exception $e) {
                echo "error en: " . $e;
            }
        }else{
            echo'error';
        }
    }
}








?>