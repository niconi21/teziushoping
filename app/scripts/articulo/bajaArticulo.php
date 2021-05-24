
<?php

$id = $_GET['id'];

include "../../DataBases/conexion.php";
try {
    $sql = $cn->prepare("UPDATE Publicaciones set activo=false WHERE id=?");
    $sql->execute([$id]);
    header('content-type: application/json; charset=utf-8');
    if ($sql->rowCount() > 0)
        echo json_encode(array('ok' => 1));
    else
        echo json_encode(array('ok' => 0));
} catch (Exception $e) {
    echo "error en: " . $e;
    //deplegamos error si se porduce
}


?>