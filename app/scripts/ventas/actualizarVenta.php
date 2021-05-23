<?php
include('../../DataBases/conexion.php');
$id = $_POST['id'];
$status = $_POST['status'];

$updateVenta = $cn->prepare('UPDATE Venta SET status = ? WHERE id = ?');
$updateVenta->execute([$status, $id]);
header('content-type: application/json; charset=utf-8');   
if($updateVenta->rowCount()>0){
    echo json_encode(array("ok" => true, "message"=>"Status actualizado"));
}else{
    echo json_encode(array("ok" => false, "message"=>"No se pudo actualizar el status de este producto"));
}

?>