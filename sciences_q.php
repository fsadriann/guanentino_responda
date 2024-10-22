

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>¡Respondamos Ciencias Naturales!</title>
</head>
<body class="body-app question">
    <div class="question-container">
        <div class="question-header">
            <a href="home.php"><i class="fa-solid fa-chevron-left"></i></a>
            <h1>Ciencias Naturales</h1>
        </div>
        <div class="container-enunciado">
            <p>
                Unos estudiantes tienen la siguiente pregunta de investigación: ¿Cómo la temperatura del agua afecta la tasa
                de crecimiento de un protozoo? Al revisar la bibliografía, ellos encuentran que este protozoo se reproduce cada
                8 horas y que necesita luz moderada, una temperatura de 15 °C a 21 °C y un pH neutro. Con base en esta
                información, ¿cuál de los siguientes experimentos les permitiría a los estudiantes contestar su pregunta de
                investigación?
            </p>
        </div>
        <form class="opciones-respuesta">
            <div>
                <input type="radio" name="opt-respuesta" id="optionA">
                <label for="optionA"><span class="radio-btn"></span>Colocar en un medio de cultivo, con un pH neutro y temperatura constante de 18 °C, un grupo de este protozoo y contar, a intervalos de 1 hora durante 8 horas, el número de protozoos</label>
            </div>
            <div>
                <input type="radio" name="opt-respuesta" id="optionB">
                <label for="optionB"><span class="radio-btn"></span>Colocar en cinco medios de cultivo a una misma temperatura, con las otras condiciones iguales, grupos de este protozoo y al cabo de 8 horas contar el número de protozoos en cada medio</label>
            </div>
            <div>
                <input type="radio" name="opt-respuesta" id="optionC">
                <label for="optionC"><span class="radio-btn"></span>Colocar en cinco medios de cultivo, con diferentes valores de pH y temperatura constante de 18 °C, grupos de este protozoo y contar a intervalos de 1 hora por 8 horas el número de protozoos</label>
            </div>
            <div>
                <input type="radio" name="opt-respuesta" id="optionD">
                <label for="optionD"><span class="radio-btn"></span>Colocar en cinco medios de cultivo a diferentes temperaturas, con las otras condiciones iguales, grupos de este protozoo y al cabo de 8 horas contar el número de protozoos en cada medio</label>
            </div>
        </form>

    </div>
    <form class="btn-enviar" action="enviar-rta.php">
        <input type="submit" value="Enviar respuesta">
    </form>
</body>
</html>