<?php
session_start();
$id = $_SESSION['idMetodoPagoUpdate'];
$titular = $_POST['titular'];
$noTarjeta = $_POST['tarjeta'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$ccv = $_POST['ccv'];

$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$ciudad = $_POST['ciudad'];
$cp = $_POST['cp'];
$noInt = $_POST['noInt'] != '' ? $_POST['noInt'] : null;
$noExt = $_POST['noExt'] != '' ? $_POST['noExt'] : null;
$referencias = $_POST['referencias'];
$id_direccion = $_POST['idDireccion'];

include('../../DataBases/conexion.php');
try {
    $update = $cn->prepare('UPDATE MetodoPago SET titular=?, noTarjeta=?, mes=?, anio=?, ccv=? WHERE id=?');
    $update->execute([$titular, $noTarjeta, $mes, $anio, $ccv, $id]);

    $updateDireccion = $cn->prepare('UPDATE Direccion SET calle = ?, colonia = ?, ciudad = ?, cp = ?, noInt = ?, noExt = ?, referencias = ? WHERE id = ?');
    $updateDireccion->execute([$calle, $colonia, $ciudad, $cp, $noInt, $noExt, $referencias, $id_direccion]);
    
    if ($update->rowCount() > 0 || $updateDireccion->rowCount()>0) {
        header('location: ../../views/pages/misMetodosPago.php?statusPut=200');
    } else {
        header('location: ../../views/pages/misMetodosPago.php?statusPut=400');
    }
} catch (Exception $e) {
    echo "error en: " . $e;
    //depliega el error
}
