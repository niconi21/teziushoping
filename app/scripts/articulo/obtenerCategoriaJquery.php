<?php
include('../../DataBases/conexion.php');
$query = $cn->prepare('SELECT * FROM Categoria');
$query->execute();


$categorias = array();
$i = 0;
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $categorias[$i] = $row;
    $i++;
}

header('content-type: application/json; charset=utf-8');

echo json_encode(array("ok" => true, "results" => $categorias));