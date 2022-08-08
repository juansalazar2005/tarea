<?php
$sta = $_POST["standard"];
$hom = $_POST["home"];
$pre = $_POST["premium"];

$Cantidad = $sta + $hom + $pre;
$total = ($sta*50000) + ($hom*70000) + ($pre*120000);

if($Cantidad>10){
    $descuento = $total * 0.20;
    print "La cantidad total a comprar es $Cantidad";
    print " El descuento es de $descuento";
    print " El total de la compra es de $total";
} else{
    print "La cantidad total a comprar es $Cantidad";
    print "No hay descuento";
    print "El total de la compra es de $total";
}

?>