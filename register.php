<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="main.js"></script>
</head>
<body class="body-register">
    <div class="header" style="padding-bottom: 50px;">
        <h1>¿Eres nuevo?</h1>
        <p>Vamos a registrarnos.</p>
    </div>
    <div class="login-form">
        <form action="" method="post">

            <input type="text" id="usuario" name="usuario"  class="input-field" placeholder="Usuario" autocomplete="off" required>
            
            <input type="text" id="nombre" name="nombre" class="input-field" placeholder="Nombre" autocomplete="off" required>
            
            <input type="text" id="colegio" name="colegio" class="input-field" placeholder="Institución Educativa" autocomplete="off" required>
            
            <input type="text" id="correo" name="correo" class="input-field" placeholder="Correo electrónico" autocomplete="off" required>
            
            <input type="password" id="contraseña" name="contraseña" class="input-field" placeholder="Contraseña" autocomplete="off" required>
            
            <input type="submit" class="submit-btn" name="registrar" value="Registrarse">

        <div class="sign-up-link">
            <p>¿Ya tienes una cuenta? <a href="index.html" class="login-link">Inicia sesión.</a></p>
        </div>
    </form>
    </div>
</body>
</html>