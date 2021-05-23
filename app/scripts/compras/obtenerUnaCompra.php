<?php
$id = $_GET['id'];
session_start();
include('../../DataBases/conexion.php');
$queryCompras = $cn->prepare('SELECT 
p.imagen, 
p.nombre AS nombreProducto,
p.descripcion,
p.precio,  
u.nombre AS nombreVendedor, 
u.apellidos, 
m.noTarjeta, 
v.id, v.cantidad, v.monto, v.fecha, v.status FROM Venta AS v
INNER JOIN Publicaciones AS p ON v.id_publicacion = p.id
INNER JOIN Usuario AS u ON v.id_vendedor = u.id
INNER JOIN MetodoPago AS m ON v.id_metodo_pago = m.id
 WHERE v.id = ?');
$queryCompras->execute([$id]);
$result = $queryCompras->fetch(PDO::FETCH_OBJ);
header('content-type: application/json; charset=utf-8');   
if($queryCompras->rowCount()>0){
    echo json_encode(array("ok" => true, "result"=>$result));
}else{
    echo json_encode(array("ok" => false, "message"=>"No existe esa compra"));
}
