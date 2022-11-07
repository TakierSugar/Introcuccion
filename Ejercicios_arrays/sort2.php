<?php 
$contador=0;
 $temperaturas=array(20,21,22,22,21,23,23,21,23,24,25,24,24,25,26,25,25,24,23,20,21,22,23,24,25,26,27,28,29,30);
asort($temperaturas);
foreach ($temperaturas as $val){
    $contador = $contador + $val;
}
$contador = $contador/count($temperaturas);
echo "La media de temperatura es: $contador\n Las 5 temperaturas más bajas son: ";

$bajas = array_slice($temperaturas, 0 ,5);
foreach ($bajas as $low_val){
    echo "$low_val ";
}
echo "\nLas 5 temperaturas más altas son: ";
$reversed = array_reverse($temperaturas);
$altas = array_slice($reversed, 0 ,5);
foreach ($altas as $big_val){
    echo "$big_val ";
}
?>