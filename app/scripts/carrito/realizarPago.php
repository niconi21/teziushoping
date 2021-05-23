<?php
session_start();

$id = $_SESSION['idUsuario'];
$idMetodo = $_POST['metodoPago'];

include('../../DataBases/conexion.php');
include('../../scripts/carrito/obtenerCarrito.php');
while ($row = $queryCarrito->fetch(PDO::FETCH_ASSOC)) {
    try {
        $insertVenta = $cn->prepare('INSERT INTO Venta (
            id_vendedor,
            id_comprador,
            id_publicacion,
            id_metodo_pago,
            cantidad,
            precio,
            monto,
            status,
            fecha) 
            VALUES (?,?,?,?,?,?,?,?,now())');
        $insertVenta->execute([
            $row['id_usuario'], $id, $row['id_publicacion'], $idMetodo, $row['cantidadCarrito'],
            $row['precio'], ($row['precio'] * $row['cantidadCarrito']), 'En proceso'
        ]);
        if ($insertVenta->rowCount() > 0) {
            $deleteCarrito = $cn->prepare('DELETE FROM Carrito WHERE id = ?');
            $deleteCarrito->execute([$row['id']]);
            if ($deleteCarrito->rowCount() > 0) {
                echo $row['nombre'] . ' OK';
            }
        }
    } catch (Exception $ex) {
        echo "Ha ocurrido el error " . $ex->getMessage();
    }
}
header('location: ../../views/pages/misCompras.php');
