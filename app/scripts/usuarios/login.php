<?php
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

include "../../DataBases/conexion.php";

$sentencia = $cn->prepare("SELECT * FROM Usuario WHERE usuario=? and contrasenia=?");
$sentencia->execute([$usuario, $password]);
$login = $sentencia->fetch(PDO::FETCH_OBJ);

if ($login) {
    $_SESSION['idUsuario'] = $login->id;
    $_SESSION['nombre'] = $login->nombre;
    $_SESSION['apellidos'] = $login->apellidos;
    $_SESSION['correo'] = $login->correo;
    $_SESSION['telefono'] = $login->telefono;
    $_SESSION['usuario'] = $login->usuario;
    $_SESSION['fechaCreacion'] = $login->fecha;
    $_SESSION['estado'] = $login->estado;
    $_SESSION['id_direccion'] = $login->id_direccion;
    $_SESSION['role'] = $login->role;
    if ($_SESSION['id_direccion']) {
        $query = $cn->prepare('SELECT * FROM Direccion WHERE id=?');
        $query->execute([$_SESSION['id_direccion']]);
        $query = $query->fetch(PDO::FETCH_OBJ);
        $_SESSION['calle'] = $query->calle;
        $_SESSION['colonia'] = $query->colonia;
        $_SESSION['ciudad'] = $query->ciudad;
        $_SESSION['cp'] = $query->cp;
        $_SESSION['noEXT'] = $query->noEXT;
        $_SESSION['noInt'] = $query->noInt;
        $_SESSION['referencias'] = $query->referencias;
    }
    header("location: ../../views/pages/dashboard.php");
} else {
    header("location: ../../views/pages/login.php?error=401");
}
