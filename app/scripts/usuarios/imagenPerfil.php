<?php
session_start();
$imagen = $_FILES['imagen']['name'];

//Si el imagen contiene algo y es diferente de vacio
if (isset($imagen) && $imagen != "") {
    $ext = explode('.', $imagen)[1];
    $tamano = $_FILES['imagen']['size'];
    $temp = $_FILES['imagen']['tmp_name'];

    if ($ext == "png" || $ext == "jpg" || $ext == "jpeg") {
        if ($tamano < 2000000) {
            if(isset($_SESSION['imagen'])){
                unlink('/var/www/html/teziushoping/app/public/usuarios/'.$_SESSION['imagen']);
            }

            $milliseconds = round(microtime(true) * 1000);
            $imagen = $_SESSION['idUsuario'] . '-' . $_SESSION['usuario'].'-'.$milliseconds . '.' . $ext;
            $ruta = '/var/www/html/teziushoping/app/public/usuarios/' . $imagen;
            if (move_uploaded_file($temp, $ruta)) {
                include('../../DataBases/conexion.php');
                $updateImagen = $cn->prepare('UPDATE Usuario SET imagen=? WHERE id=?');
                $updateImagen->execute([$imagen, $_SESSION['idUsuario']]);

                if ($updateImagen->rowCount() > 0)
                    {
                        $_SESSION['imagen']=$imagen;
                        header('location: ../../views/pages/perfil.usuario.php?statusFile=200');
                    
                    }
                else
                    header('location: ../../views/pages/perfil.usuario.php?statusFile=400');
            }
        }
    }
}else{
    header('location: ../../views/pages/perfil.usuario.php?statusFile=401');
}
