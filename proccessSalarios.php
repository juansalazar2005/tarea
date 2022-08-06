<?php
$salario=$_POST['salario'];
 
    if ($salario>=1000000) {
       print "<p>Gana más de un SMLV</p>";
    } elseif ($salario <= 0) {
        print "<p>Ingresó un valor incorrecto</p>";
    } elseif ($salario<1000000) {  
        print "<p>Gana menos de un SMLV</p>";
    } 
?>