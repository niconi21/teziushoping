<?php
session_start();
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$ciudad = $_POST['ciudad'];
$cp = $_POST['cp'];
$noInt = $_POST['noInt'];
$noEXT = $_POST['noEXT'];
$referencias = $_POST['referencias'];


include('../../DataBases/conexion.php');

try {

    $sql = $cn->prepare('UPDATE Usuario SET  nombre = ?, apellidos = ?, correo = ?, telefono = ?');
    $sql->execute([$nombre, $apellidos, $correo, $telefono,]);

    if ($sql) {
        $query = $cn->prepare('SELECT id_direccion FROM Usuario WHERE id = ?');
        $query->execute([$_SESSION['idUsuario']]);
        $query = $query->fetch(PDO::FETCH_OBJ);
        if ($query->id_direccion) {

            $updateDireccion = $cn->prepare('UPDATE Direccion SET calle = ?, colonia = ?, ciudad = ?, cp = ?, noInt = ?, noEXT = ?, referencias = ? WHERE id = ?');
            $updateDireccion->execute([$calle, $colonia, $ciudad, $cp, $noInt, $noEXT, $referencias, $query->id_direccion]);
            if ($updateDireccion) {

                header('location: ../../views/pages/perfil.usuario.php?status=200');
            }else{
                header('location: ../../views/pages/perfil.usuario.php?status=400');
            }
        } else {
            echo '2';
            $queryDireccion = $cn->prepare('INSERT INTO Direccion (calle, colonia, ciudad, cp, noInt, noEXT, referencias) VALUES (?, ?, ?, ? ,? ,? ,?)');
            $queryDireccion->execute([$calle, $colonia, $ciudad, $cp, $noInt, $noEXT, $referencias]);
            if ($queryDireccion) {
                $queryLastId = $cn->prepare('SELECT MAX(id) AS id FROM Direccion');
                $queryLastId->execute();
                $queryLastId = $queryLastId->fetch(PDO::FETCH_OBJ);
                if ($queryLastId) {
                    echo $queryLastId->id . '<br>';
                    echo $_SESSION['idUsuario'];
                    $updateUsuario = $cn->prepare('UPDATE Usuario SET id_direccion = ? WHERE id = ?');
                    $updateUsuario->execute([$queryLastId->id, $_SESSION['idUsuario']]);
                    if ($updateUsuario) {
                        header('location: ../../views/pages/perfil.usuario.php?status=200');
                    } else {
                        header('location: ../../views/pages/perfil.usuario.php?status=400');
                    }
                } else {
                    header('location: ../../views/pages/perfil.usuario.php?status=400');
                }
            } else {

                header('location: ../../views/pages/perfil.usuario.php?status=400');
            }
        }
    } else {
        header('location: ../../views/pages/perfil.usuario.php?status=400');
    }
} catch (Exception $e) {
    echo "error en: " . $e;
    //desplegamos el error
}
