<?php
 session_start();
 
//-Nombre proyecto: Teziushoping
//-Creación: 04-05-2021
//-FechaEntrega: 6 de Mayo de 2021
//Autor: Jaret Josue Camacho Rolon

//recibimos los datos por POST y los asignamos a una variable local
$contrasenia = $_POST['contrasenia'];
//archivo de conexion
include "../../DataBases/conexion.php";
try{
//mandamos los datos por el metodo Prepare
$sql = $cn-> prepare("UPDATE Usuario SET estado = 0 WHERE id=? AND contrasenia=?");
$result = $sql->execute([$_SESSION['idUsuario'],$contrasenia]);
if($sql->rowCount()>0){
    echo json_encode(array('success' => 1));
}else{
    echo json_encode(array('success' => 0));
}
    
    

//redirigimos al indes.html
// header('location: ../../views/pages/perfil.usuario.php');
}catch(Exception $e){
    echo "error en: ".$e;
    //desplegamos error
}
