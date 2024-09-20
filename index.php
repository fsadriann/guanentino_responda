<?php

require 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="styles.css">
    <script src="main.js"></script>
    <link rel="icon" href="img/logo_GR.png">
</head>
<body class="body-register">

    <div class="header" style="padding-bottom: 50px;">
        <h1>¿Eres nuevo?</h1>
        <p>Vamos a registrarnos.</p>
    </div>
    <div class="login-form">
        <form action="index.php" method="POST">
            
            <input type="text" name="usuario"  class="input-field" placeholder="Usuario" autocomplete="off" required>
            
            <input type="text" name="apellido" class="input-field" placeholder="Apellido" autocomplete="off" required>
            
            <input type="text" name="nombre" class="input-field" placeholder="Nombre" autocomplete="off" required>
            
            <input type="text" name="correo" class="input-field" placeholder="Correo electrónico" autocomplete="off" required>

            <input type="text" name="telefono" class="input-field" placeholder="Numero de telefono" autocomplete="off" required>

            
            <input type="text" name="colegio" class="input-field" placeholder="Institución Educativa" autocomplete="off" required>
            
            <input type="password" name="clave" class="input-field" placeholder="Contraseña" autocomplete="off" required>
            
            <input type="submit" class="submit-btn" name="registrar" value="Registrarse">

        <div class="sign-up-link">
            <p>¿Ya tienes una cuenta? <a href="login.php" class="login-link">Inicia sesión.</a></p>
        </div>
    </form>
    </div>
</body>
</html>

<?php

if(isset($_POST[ 'registrar' ])){
    $usuario = $_POST ['usuario'];
    $apellido = $_POST ['apellido'];
    $nombre = $_POST ['nombre'];
    $correo = $_POST ['correo'];
    $telefono = $_POST ['telefono'];
    $colegio = $_POST ['colegio'];
    $clave = $_POST['clave'];
    # $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);


    $insertarDatos = "INSERT INTO estudiante VALUES('', '1', '$usuario', '$apellido', '$nombre', '$correo', '$telefono', '$colegio', '$clave')";

    $ejecutarInsertar = mysqli_query ($conexion, $insertarDatos);
}



?>