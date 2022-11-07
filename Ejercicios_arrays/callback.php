<?php
$pruebas = array("awoneo","Vivaaaaaaaaasta","Lol","TRes tristes tigres comen trigo en", "un trigal");
$strlen = array_map("strlen",$pruebas);
$min = min($strlen);
$max = max($strlen);
echo ("La longitud minima es " . $min . " y la maxima es " . $max);
?>
