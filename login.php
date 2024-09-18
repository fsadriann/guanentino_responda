<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

    <script src="main.js"></script>
</head>
<body class="body-login">
    <div class="header" style="padding-bottom: 50px;">
        <h1>Bienvenido!</h1>
        <p>Vamos a iniciar sesión.</p>
    </div>
    <div class="login-form">
        <form action="loguear.php" method="post">

            <input type="text" name="usuario" class="input-field" placeholder="Usuario" autocomplete="off" required>
            
            <input type="password" name="clave" class="input-field" placeholder="Contraseña" autocomplete="off" required>
            
            <input type="submit" class="submit-btn" value="Iniciar sesión" href="home.html">
                        
            <div class="sign-up-link">
                <p>¿No tienes una cuenta? <a href="home.html" class="login-link">Regístrate.</a></p>
            </div>
        </form>
    </div>
</body>
</html>