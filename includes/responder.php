<?php
    $id = $_GET['id'];
    $resp = $_POST['contenido_respuesta'];

    if(isset($id) && isset($resp)){
        include ' conexion.php';
        $squ = "UPDATE preguntas SET Resp = '$resp', Estado = 1  WHERE id = '$id'";

        if($cone->query($squ)){
            header('Location: ../responder.php?responder=1');
        } else {
            die("Error al actualizar".$cone->error);
        }
    }

    /*if(isset($butto)){
        include 'conexion.php';
        $sqq = "INSERT INTO preguntas (Preg, estado) VALUES ('$nuev', 1)";
        //mysqli_query($cone, $sqq);
        if ($cone->query($sqq)==true){
            header('Location: ../agregar.php?bashbin=231');
        } else {
            header('Location: ../agregar.php?bashbin=132');
        }

    }*/
?>