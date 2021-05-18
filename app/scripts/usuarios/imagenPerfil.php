<?php
session_start();
$ruta = './'.$_SESSION['idUsuario'].'-'.$_SESSION['usuario'];
$imagen = $_FILES['imagen']['tmp_name'];
echo $ruta.'<br>';
echo $imagen.'<br>';
if(move_uploaded_file($imagen, $ruta)){
    echo 'archivo cargado';   
}else{
    echo 'Error';
}

?>