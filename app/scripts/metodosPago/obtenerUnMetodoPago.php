
<?php
session_start();
$id = $_SESSION['idMetodoPagoUpdate'];

include('../../DataBases/conexion.php');


    $query = $cn->prepare('SELECT * FROM MetodoPago WHERE id=?');
    $query->execute([$id]);

    $result = $query->fetchAll(PDO::FETCH_OBJ)[0];
    if ($query->rowCount() < 1) {
        header('location: ../../views/pages/misMetodosPago.php?statusPut=404');
    }

?>
