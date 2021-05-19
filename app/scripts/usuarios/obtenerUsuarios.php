<?php
session_start();
include('../../DataBases/conexion.php');
if($_SESSION['role']=="ADMIN_USER"){

    $query = $cn->prepare('SELECT * FROM Usuario WHERE role=?');
    $query->execute(['CLIENt_USER']);
    

}else{
    header('location: ../../views/pages/login.php?error=403');
}

?>