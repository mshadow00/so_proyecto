<?php
       $id = $_GET['id'];
   
       if(isset($id)){
           include 'conexion.php';
           $squ = "DELETE FROM preguntas WHERE ID = '$id'";
   
           if($cone->query($squ)){
               header('Location: ../responder.php?eliminar=1');
           } else {
            header('Location: ../responder.php?eliminar=0');
               die("Error al actualizar".$cone->error);
           }
       };
