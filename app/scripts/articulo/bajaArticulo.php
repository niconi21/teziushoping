<!-- 
-Nombre proyecto: Teziushoping
-Creación: 04-05-2021
-FechaEntrega: 6 de Mayo de 2021
Autor: Nicolas Moreno Duran
-->
<?php

//recibimos los datos por POST y los asignamos a una variable local
$id = $_POST['id'];

//archivo de conexion
include "../../DataBases/conexion.php";
try {

    //mandamos los datos por el metodo PREPARE
    $sql = $cn->prepare("UPDATE Publicación set activo=false WHERE id=?");
    $sql->execute([$id]);
    if ($sql->rowCount() > 0)
        echo json_encode(array('success' => 1));
    else
        echo json_encode(array('success' => 0));
} catch (Exception $e) {
    echo "error en: " . $e;
    //deplegamos error si se porduce
}


?>