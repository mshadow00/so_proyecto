<?php
    $butto = $_POST['new_que'];
    $nuev = $_POST['new_question'];

    if(isset($butto)){
        include 'conexion.php';
        $sqq = "INSERT INTO preguntas (Preg, estado) VALUES ('$nuev', 1)";
        //mysqli_query($cone, $sqq);
        if ($cone->query($sqq)==true){
            header('Location: ../agregar.php?bashbin=231');
        } else {
            header('Location: ../agregar.php?bashbin=132');
        }

    }
?>