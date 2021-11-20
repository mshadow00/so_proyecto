<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Preguntas</title>
</head>

<body>
    <div class="main">
        <h1>Gestionar</h1>
    </div>
    <a href="index.php">
        <p>Regresar</p>
    </a>
    <div class="container">
        <form action="includes/insertar.php" method="post">
            <h2>Ingresar Preguntas</h2>
            <div class="input">
                <input type="text" name="new_question" id="new_question" placeholder="Ingresa la pregunta">
            </div>
            <div class="enviar">
                <input type="submit" name="new_que" value="Enviar">
            </div>
        </form>
    </div>

    <?php
        if (isset($_GET['bashbin']) == 231){
            echo "<script> alert('Preguntar registrada con éxito');</script>";
        }else if (isset($_GET['bashbin']) == 132){
            echo "<script> alert('Preguntar no fue registrada');</script>";
        };
    ?>

</body>

</html>