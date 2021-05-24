<?php
$id = $_GET['id'];
include('../../DataBases/conexion.php');
$queryProductos = $cn->prepare('SELECT p.*, c.nombre AS nombreCategoria FROM Publicaciones AS p INNER JOIN Categoria AS c ON p.id_categoria = c.id WHERE id_categoria=? AND activo=true');
$queryProductos->execute([$id]);

$publicaciones = array();
$i = 0;
while ($row = $queryProductos->fetch(PDO::FETCH_ASSOC)) {
    $publicaciones[$i] = $row;
    $i++;
}
header('content-type: application/json; charset=utf-8');
if ($queryProductos->rowCount() > 0) {
    echo json_encode(array("ok" => true, "results" => $publicaciones));
} else {
    echo json_encode(array("ok" => false));
}
