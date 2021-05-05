<?php

$banco=$_POST['banco'];
$noCuenta=$_POST['noCuenta'];
$tipoCuenta=$_POST['tipoCuenta'];

$idDireccion=$_POST['1'];
$fecha="CURDATE()";

include "../../DataBases/conexion.php";
try{



$sql = $cn-> prepare("insert into metodoPago(banco, noCuenta, tipoCuenta) value (?,?,?)");
$resultado=$sql->execute([$banco,$noCuenta,$tipoCuenta]);

header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
}


?>