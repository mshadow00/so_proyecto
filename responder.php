<?php
include 'includes/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
        <h2>Listado de preguntas</h2>
        <table>
            <tr>
                <th>N°</th>
                <th>Pregunta</th>
                <th>Estado</th>
                <th>Opciones</th>
                <th>Gestionar</th>
            </tr>
            <?php
            if ($cone) {
                $preque = "SELECT * FROM preguntas";
                $result = $cone->query($preque);
                $num = 0;
                $rus;
                while ($pq = $result->fetch_assoc()) {
                    $num++;
                    $pregunta = $pq['Preg'];
                    $respuesta = $pq['Resp'];
                    $esta = $pq['Estado'];
                    $iden = $pq['ID'];

                    if (isset($_GET['id'])) {
                        if ($iden == $_GET['id']) {
                            $rus = $pregunta;
                        }
                    }

            ?>
                    <tr>
                        <td>
                            <p><?php echo $num; ?></p>
                        </td>
                        <td>
                            <p><?php echo $pregunta; ?></p>
                        </td>
                        <td>
                            <p><?php echo $respuesta; ?></p>
                        </td>
                        <td>
                            <p><?php echo $esta = ($esta == 1) ? "Respondida" : "No respondida"; ?></p>
                        </td>
                        <td>
                            <a href="responder.php?id=<?php echo $iden ?>">
                                <p>Responder</p>
                            </a>
                            <a href="includes/eliminar.php?id=<?php echo $iden ?>">
                                <p>Eliminar</p>
                            </a>
                        </td>
                    </tr>
            <?php
                }
                $cone->close();
            } else {
                echo 'Conexión faillida';
            };

            $ver = "display:none";
            if (isset($_GET['id'])) {
                $ver = "display:initial";
            }

            ?>
            <div style="<?php echo $ver; ?>">
                <h4>Responder pregunta</h4>
                <p><?php echo $rus; ?></p>
                <form action="includes/responder.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form">
                    <div>
                        <textarea name="contenido_respuesta" id="" cols="30" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="respondido" value="Guardar">
                    </div>
                </form>
            </div>
        </table>
    </div>
</body>

</html>