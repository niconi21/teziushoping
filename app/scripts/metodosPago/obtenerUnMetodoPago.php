
<?php
session_start();
$id = 0;

if (isset($_SESSION['idMetodoPagoUpdate'])) {
    $id = $_SESSION['idMetodoPagoUpdate'];
} else {
    $id = $_GET['id'];
}


include('../../DataBases/conexion.php');



$query = $cn->prepare('SELECT * FROM MetodoPago WHERE id=?');
$query->execute([$id]);
$result = $query->fetchAll(PDO::FETCH_OBJ)[0];
if (isset($_SESSION['idMetodoPagoUpdate'])) {
    if ($query->rowCount() < 1) {
        header('location: ../../views/pages/misMetodosPago.php?statusPut=404');
    }
}else if(isset($_GET['id'])){
    header('content-type: application/json; charset=utf-8');
    if($query->rowCount()>0){
        echo json_encode(array("ok" => true, "result" => $result));
    }else{
        echo json_encode(array("ok" => false, "message" => 'No existe ese método de pago'));
    }
}

?>
