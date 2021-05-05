<?php

//recibimos los datos por POST y los asignamos a una variable local
$banco=$_POST['banco'];
$noCuenta=$_POST['noCuenta'];
$tipoCuenta=$_POST['tipoCuenta'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//archivo de conexion
include "../../DataBases/conexion.php";
try{
//mandamos los datos por el metodo EXECUTE
$sql = $cn-> prepare("insert into metodoPago(banco, noCuenta, tipoCuenta) value (?,?,?)");
$resultado=$sql->execute([$banco,$noCuenta,$tipoCuenta]);

header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //desplegamos el error
}


?>