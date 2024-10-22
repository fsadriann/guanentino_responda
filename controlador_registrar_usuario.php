<?php

if(!empty($_POST['registrar'])) {
    if(empty($_POST['usuario']) or empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['correo']) or empty($_POST['telefono']) or empty($_POST['colegio']) or empty($_POST['clave'])){
        echo 'Uno de los campos esta vacio';
    }
}
?>