<?php 
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="productos.csv"');

$lista = array ("1" => "Producto1","2" => "Producto2","3" => "Producto3");
foreach ($lista as $campos => $valor){
   echo($campos .";". $valor ."\n");
}
?>
