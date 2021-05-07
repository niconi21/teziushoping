<!-- 
-Nombre proyecto: Teziushoping
-Creación: 04-05-2021
-FechaEntrega: 6 de Mayo de 2021
Autor: Nicolas Moreno Duran
-->
<?php

//recibimos los datos por POST y los asignamos a una variable local
$idAriculo = $_POST['$idAriculo'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//archivo de conexion
include "../../DataBases/conexion.php";
try{

//mandamos los datos por el metodo PREPARE
$sql = $cn-> prepare("delete from Articulo where idArticulo=".$idAriculo);

header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //deplegamos error si se porduce
}


?>
