<?php

session_start();
$id = $_SESSION['idUsuario'];
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

include('../../DataBases/conexion.php');
$queryDireccion = $cn->prepare('INSERT INTO Direccion(calle, colonia,  ciudad, cp, noInt, noExt, referencias) VALUES (?, ?, ?, ? ,? ,? ,?)');
$queryDireccion->execute([$calle, $colonia, $ciudad, $cp, $noInt, $noExt, $referencias]);
if ($queryDireccion->rowCount() > 0) {
    $queryLastId = $cn->prepare('SELECT MAX(id) AS id FROM Direccion');
    $queryLastId->execute();
    if ($queryLastId->rowCount() > 0) {
        $queryLastId = $queryLastId->fetch(PDO::FETCH_OBJ);
        $insertMetodo = $cn->prepare('INSERT INTO MetodoPago (titular, noTarjeta, mes, anio, ccv, id_usuario, id_direccion) VALUES (?, ?, ?, ?, ?, ?, ?)');

        $insertMetodo->execute([$titular, $noTarjeta, $mes, $anio, $ccv, $id, $queryLastId->id]);
        if ($insertMetodo->rowCount() > 0) {
            header('location: ../../views/pages/misMetodosPago.php?statusPost=200');
        } else {
            header('location: ../../views/pages/misMetodosPago.php?statusPost=400');
        }
    }
} else {
    header('location: ../../views/pages/misMetodosPago.php?statusPost=400');
}
