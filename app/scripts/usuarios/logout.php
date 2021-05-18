<?php

session_start();
unset($_SESSION['idUsuario']);
unset($_SESSION['nombre']);
unset($_SESSION['apellidos']);
unset($_SESSION['correo']);
unset($_SESSION['telefono']);
unset($_SESSION['usuario']);
unset($_SESSION['fechaCreacion']);
unset($_SESSION['estado']);
unset($_SESSION['id_direccion']);
unset($_SESSION['calle']);
unset($_SESSION['colonia']);
unset($_SESSION['ciudad']);
unset($_SESSION['cp']);
unset($_SESSION['noEXT']);
unset($_SESSION['noInt']);
unset($_SESSION['referencias']);

header('location: ../../views/pages/login.php');
?>