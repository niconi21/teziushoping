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

////CargaImagen

// $NombreArchivo = $_FILES['imagenArticulo']['name'];
// $directorioTemporal = $_FILES['imagenArticulo']['tmp_name'];
// $tamanio = $_FILES['imagenArticulo']['size'];

////fin cargaImagen
// $imagenArticulo = file_get_contents($directorioTemporal);
// $urlArticulo = "img/";
// $extImagen = strtolower(pathinfo($NombreArchivo, PATHINFO_EXTENSION));
// $urlImagen = $urlArticulo . $nombreArticulo . "." . $extImagen;
// move_uploaded_file($directorioTemporal, $urlImagen);
$urlImagen = 'noImage.png';
try {
    ///madamos los datos por el metodo EXECUTE
    $sql = $cn->prepare("UPDATE Publicaciones SET 
    nombre=?, descripcion=?, precio=?, cantidad=?, imagen=?, id_categoria=?
    WHERE id=?");
    $resultado = $sql->execute([$nombre, $descripcion, $precio, $cantidad, $urlImagen, $idCategoria, $_SESSION['idProductoUpdate']]);
    if ($sql->rowCount() > 0)
        header('location: ../../views/pages/misPublicaciones.php?statusPut=200');
    else
        header('location: ../../views/pages/misPublicaciones.php?statusPut=400');
} catch (Exception $e) {
    echo "error en: " . $e;
    //depliega el error
}


?>