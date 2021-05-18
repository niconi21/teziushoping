<?php

session_start();
$id = $_SESSION['idProductoUpdate'];
include('../../DataBases/conexion.php');
$queryProducto = $cn->prepare('SELECT * FROM Publicaciones WHERE id = ?');
$queryProducto->execute([$id]);
$result = $queryProducto->fetchAll(PDO::FETCH_OBJ)[0];
if($queryProducto->rowCount()<1){
    header('location: ../../views/pages/misPublicaciones.php?statusPut=404');
}
