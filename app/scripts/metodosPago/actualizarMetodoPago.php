<?php
session_start();
$id = $_SESSION['idMetodoPagoUpdate'];
$titular = $_POST['titular'];
$noTarjeta = $_POST['tarjeta'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$ccv = $_POST['ccv'];


echo 'id: ' . $id . '<br>';
echo 'titular: ' . $titular . '<br>';
echo 'noTarjeta: ' . $noTarjeta . '<br>';
echo 'mes: ' . $mes . '<br>';
echo 'anio: ' . $anio . '<br>';
echo 'ccv: ' . $ccv . '<br>';
include('../../DataBases/conexion.php');
try {
    $update = $cn->prepare('UPDATE MetodoPago SET titular=?, noTarjeta=?, mes=?, anio=?, ccv=? WHERE id=?');
    $update->execute([$titular, $noTarjeta, $mes, $anio, $ccv, $id]);

    if ($update->rowCount() > 0) {
        header('location: ../../views/pages/misMetodosPago.php?statusPut=200');
    } else {
        header('location: ../../views/pages/misMetodosPago.php?statusPut=400');
    }
} catch (Exception $e) {
    echo "error en: " . $e;
    //depliega el error
}
