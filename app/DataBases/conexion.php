<?php
//Teziushopping - Conexión

    //Definimos los parametros de usuario y contraseña para conectar a la BD
    $user = "root";
    $pwd = "teziushoping";
    $dbname = "TeziushopingDB";

    //Valida que los parametros coincidan y deja conectar
    try{
        $cn = new PDO('mysql:host=localhost; dbname='.$dbname, $user, $pwd,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "Set names utf8"));

          
    //Si no mandará una excepción y no dejará conectar a la BD
    }catch (Exception $ex){
        echo "Ha ocurrido el error ".$ex->getMessage();
    }
?>