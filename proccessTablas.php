<?php

    $tabla = $_POST['tabla'];
    $numero = $_POST['numero'];
    $multiplicador = 0;
    $resultado = $numero;

    for ($i = $tabla; $i  <= $numero; $i = $i + $tabla) { 

        $multiplicador = $multiplicador + 1;
        print "<p> $tabla x $multiplicador= $i</p>";
        
    };

?>