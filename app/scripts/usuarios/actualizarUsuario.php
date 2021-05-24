<?php
session_start();
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$ciudad = $_POST['ciudad'];
$cp = $_POST['cp'];
$noInt = $_POST['noInt'] != '' ? $_POST['noInt'] : null;
$noExt = $_POST['noExt'] != '' ? $_POST['noExt'] : null;
$referencias = $_POST['referencias'];
include('../../DataBases/conexion.php');
try {

    $sql = $cn->prepare('UPDATE Usuario SET  correo = ?, telefono = ? WHERE id=?');
    $sql->execute([$correo, $telefono, $_SESSION['idUsuario']]);

    if ($sql) {
        $_SESSION['correo'] = $correo;
        $_SESSION['telefono'] = $telefono;
        $query = $cn->prepare('SELECT id_direccion FROM Usuario WHERE id = ?');
        $query->execute([$_SESSION['idUsuario']]);
        $query = $query->fetch(PDO::FETCH_OBJ);
        if ($query->id_direccion) {
            $updateDireccion = $cn->prepare('UPDATE Direccion SET calle = ?, colonia = ?, ciudad = ?, cp = ?, noInt = ?, noExt = ?, referencias = ? WHERE id = ?');
            $updateDireccion->execute([$calle, $colonia, $ciudad, $cp, $noInt, $noExt, $referencias, $query->id_direccion]);
            if ($updateDireccion) {
                $_SESSION['calle'] = $calle;
                $_SESSION['colonia'] = $colonia;
                $_SESSION['ciudad'] = $ciudad;
                $_SESSION['cp'] = $cp;
                $_SESSION['noInt'] = $noInt;
                $_SESSION['noExt'] = $noExt;
                $_SESSION['referencias'] = $referencias;
                header('location: ../../views/pages/perfil.usuario.php?status=200');
            } else {
                header('location: ../../views/pages/perfil.usuario.php?status=400');
            }
        } else {
            $queryDireccion = $cn->prepare('INSERT INTO Direccion(calle, colonia,  ciudad, cp, noInt, noExt, referencias) VALUES (?, ?, ?, ? ,? ,? ,?)');
            $queryDireccion->execute([$calle, $colonia, $ciudad, $cp, $noInt, $noExt, $referencias]);
            if ($queryDireccion) {
                echo 'true';
                $_SESSION['calle'] = $calle;
                $_SESSION['colonia'] = $colonia;
                $_SESSION['ciudad'] = $ciudad;
                $_SESSION['cp'] = $cp;
                $_SESSION['noInt'] = $noInt;
                $_SESSION['noExt'] = $noExt;
                $_SESSION['referencias'] = $referencias;
                $queryLastId = $cn->prepare('SELECT MAX(id) AS id FROM Direccion');
                $queryLastId->execute();
                $queryLastId = $queryLastId->fetch(PDO::FETCH_OBJ);
                if ($queryLastId) {
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
