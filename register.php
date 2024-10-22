<?php

require 'conexion.php';


if(isset($_POST[ 'registrar' ])) {
    $usuario = $_POST ['usuario'];
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $correo = $_POST ['correo'];
    $telefono = $_POST ['telefono'];
    $colegio = $_POST ['colegio'];
    $clave = $_POST['clave'];
    # $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);


    $query = "INSERT INTO estudiante VALUES('', '1', '$usuario', '$nombre', '$apellido', '$correo', '$telefono', '$colegio', '$clave')";

    $insertar = mysqli_query($conexion, $query) or trigger_error("Error en la insercion de los datos: ".mysqli_error($conexion));

    if($insertar)
    {
        echo '<script type="text/javascript">
                alert("Registro Exitoso");
                window.location.href="register.php";
            </script>';
    }else{
        echo '<script type="text/javascript">
                alert("Ha ocurrido un error...");
                window.location.href="register.php";
            </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="styles.css">
    <script src="main.js"></script>
    <link rel="icon" href="img/logo-redondo.png">
</head>
<body class="body-register">

    <div class="header" style="padding-bottom: 50px;">
        <h1>¿Eres nuevo?</h1>
        <p>Vamos a registrarnos.</p>
    </div>

    <div class="login-form">
        <form action="index.php" method="POST">

            <?php
            include("modelo/conexion.php");
            include("modelo/controlador_registrar_usuario.php");
            ?>
            
            <input type="text" name="usuario"  class="input-field" placeholder="Usuario" autocomplete="off">
            
            <input type="text" name="nombre" class="input-field" placeholder="Nombre" autocomplete="off">
            
            <input type="text" name="apellido" class="input-field" placeholder="Apellido" autocomplete="off">
            
            <input type="text" name="correo" class="input-field" placeholder="Correo electrónico" autocomplete="off">

            <input type="text" name="telefono" class="input-field" placeholder="Numero de telefono" autocomplete="off">

            
            <input type="text" name="colegio" class="input-field" placeholder="Institución Educativa" autocomplete="off">
            
            <input type="password" name="clave" class="input-field" placeholder="Contraseña" autocomplete="off">
            
            <input type="submit" class="submit-btn" name="registrar" value="Registrarse">

        <div class="sign-up-link">
            <p>¿Ya tienes una cuenta? <a href="index.php" class="login-link">Inicia sesión.</a></p>
        </div>
    </form>
    </div>
</body>
</html>