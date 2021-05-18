<?php
session_start();
include('../../DataBases/conexion.php');
echo $_session['id_direccion'];
if($_session['id_direccion']){
    echo '<button>asdasd<//button>';
    echo $_session['id_direccion'];
}else{
    echo '<button>Nel perro<//button>';
    $_session['id_direccion'];
}
$query = $cn->prepare('SELECT * FROM Usuario AS u INNER JOIN Direccion AS d ON d.id = u.id_direccion');

?>