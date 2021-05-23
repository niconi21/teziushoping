<?php
$id = $_GET['id'];

include('../../DataBases/conexion.php');

try {
    $deleteMetodoPago = $cn->prepare('DELETE FROM MetodoPago WHERE id=?');
    $deleteMetodoPago->execute([$id]);

    header('content-type: application/json; charset=utf-8');   
    if ($deleteMetodoPago->rowCount() > 0) {
        echo json_encode(array("ok" => true));
    } else {
        echo json_encode(array("ok" => false));
    }
} catch (Exception $e) {
    echo "error en: " . $e;
    //depliega el error
}
