<?php

session_start();
include('../../DataBases/conexion.php');

$id = 0;
if (isset($_SESSION['idProductoUpdate'])) {
    $id = $_SESSION['idProductoUpdate'];
} else if (isset($_GET['id']))
    $id = $_GET['id'];
$queryProducto = $cn->prepare('SELECT p.*, u.nombre AS nombreUsuario, u.apellidos FROM Publicaciones AS p INNER JOIN Usuario AS u ON p.id_usuario = u.id  WHERE p.id = ?');
$queryProducto->execute([$id]);
$result = $queryProducto->fetchAll(PDO::FETCH_OBJ)[0];
if (isset($_SESSION['idProductoUpdate'])) {
    unset($_SESSION['idProductoUpdate']);
    if ($queryProducto->rowCount() < 1) {
        header('location: ../../views/pages/misPublicaciones.php?statusPut=404');
    }
} else if (isset($_GET['id'])) {
    header('content-type: application/json; charset=utf-8');
    if ($queryProducto->rowCount() > 0) {
        echo json_encode(array("ok" => true, "result" => $result));
    } else {
        echo json_encode(array("ok" => false, "message" => "no existe el producto"));
    }
}
