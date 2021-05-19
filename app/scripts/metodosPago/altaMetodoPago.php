<?php

session_start();
$id = $_SESSION['idUsuario'];
$titular = $_POST['titular'];
$noTarjeta = $_POST['tarjeta'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$ccv = $_POST['ccv'];

include('../../DataBases/conexion.php');
$insert = $cn->prepare('INSERT INTO MetodoPago (titular, noTarjeta, mes, anio, ccv, id_usuario) VALUES (?, ?, ?, ?, ?, ?)');

$insert->execute([$titular,$noTarjeta,$mes,$anio,$ccv,$id]);
if($insert->rowCount()>0){
    header('location: ../../views/pages/misMetodosPago.php?statusPost=200');
}else{
    header('location: ../../views/pages/misMetodosPago.php?statusPost=400');

}


?>