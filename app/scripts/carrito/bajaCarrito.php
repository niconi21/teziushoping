<?php
    include('../../DataBases/conexion.php');
    $idCarrito = $_GET['id'];
    $deleteCarrito = $cn->prepare('DELETE FROM Carrito WHERE id=?');
    $deleteCarrito->execute([$idCarrito]);
    if($deleteCarrito->rowCount()>0){
        header('location: ../../views/pages/miCarrito.php?statusDelete=200');
    }else{
        header('location: ../../views/pages/miCarrito.php?statusDelete=400');
    }
    

?>