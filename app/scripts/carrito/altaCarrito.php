<?php
session_start();

include('../../DataBases/conexion.php');

$id_usuario = $_SESSION['idUsuario'];
$id_publicacion = $_POST['id_publicacion'];
$cantidad = $_POST['cantidad'];

$queryCarrito = $cn->prepare('SELECT * FROM Carrito WHERE id_usuario = ?');
$queryCarrito->execute([$id_usuario]);
$encontrado = false;
if ($queryCarrito->rowCount() > 0) {
    while ($row = $queryCarrito->fetch(PDO::FETCH_ASSOC)) {
        if ($row['id_publicacion'] == $id_publicacion) {
            $encontrado = true;
            $newCantidad = $cantidad + $row['cantidad'];
            $updateCarrito = $cn->prepare('UPDATE Carrito SET cantidad = ? WHERE id=?');
            $updateCarrito->execute([$newCantidad, $row['id']]);
            if($updateCarrito->rowCount()>0){
                header('location: ../../views/pages/productosServicios.php?statusPut=200');
            }else{
                header('location: ../../views/pages/productosServicios.php?statusPut=400');
            }
        }
    }
}
if (!$encontrado) {
    $addCarrito = $cn->prepare('INSERT INTO Carrito(id_usuario, id_publicacion, cantidad) VALUES (?, ?, ?)');
    $addCarrito->execute([$id_usuario, $id_publicacion, $cantidad]);
    if ($addCarrito->rowCount() > 0) {
        header('location: ../../views/pages/productosServicios.php?statusPost=200');
    } else {
        header('location: ../../views/pages/productosServicios.php?statusPost=400');
    }
}
