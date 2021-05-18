<?php

include('../../DataBases/conexion.php');
$query = $cn->prepare('SELECT * FROM Categoria');
$query->execute();


?>