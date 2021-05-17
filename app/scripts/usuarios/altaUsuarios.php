<!-- 
-Nombre proyecto: Teziushoping
-Creación: 04-05-2021
-FechaEntrega: 6 de Mayo de 2021
Autor: Jaret Josue Camacho Rolon
-->
<?php

//Se declaran los parametros a enviar usando el método POST
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];


echo $nombre . '<br>';
echo $apellidos . '<br>';
echo $usuario . '<br>';
echo $contrasenia . '<br>';
echo $correo . '<br>';
echo $telefono . '<br>';
//Se establece la conexion a la base de datos
include "../../DataBases/conexion.php";
try {


    //Se mandan los datos
    $sql = $cn->prepare("INSERT INTO Usuario(nombre, apellidos, telefono, correo, usuario, contrasenia, role) VALUES (?,?,?,?,?,?,?)");
    $resultado = $sql->execute([$nombre, $apellidos, $telefono, $correo, $usuario, $contrasenia, 'CLIENT_USER']);
    if ($resultado)
        header('location: ../../views/pages/login.php?registro=true');
    else
        header('location: ../../views/pages/login.php?registro=false');
    //redirigimos al index.html
    } catch (Exception $e) {
        echo "error en: " . $e;
        //desplegamos el error
    }


?>