<?php

    require 'conexion.php';

    session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $query = "SELECT id_rol, COUNT(*) AS contar FROM estudiante WHERE usuario = '$usuario' AND clave = '$clave'";

    $consulta = mysqli_query($conexion, $query) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

    $resultado = mysqli_fetch_array($consulta);

    if($resultado['contar']>0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id_rol'] = $resultado['id_rol'];

        // verificar rol

        if($resultado['id_rol'] == 1){
            header("location: home.php");
        } else{
            header("location: admin.php");
        }
    }
    else{
        echo 
        "<script>
            alert('Usuario o clave incorrectas, por favor intente de nuevo.');
            window.location='login.php'
        </script>";
    }

?>

