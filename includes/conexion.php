<?php
    $server = "localhost";
    $usa = "root";
    $pass = "";
    $db = "preguntas";

    $cone = new mysqli($server,$usa, $pass, $db);

    if($cone->connect_error){
        echo "Problema de conexión: ", $cone->connect_error;
    }
    $cone->set_charset("utf8");
?>