<?php
$color = array('blanco'=>'blanco.html', 'verde'=>'verde.html', 'rojo'=>'rojo.html'); 
echo "<ul>\n";
foreach ($color as $valor => $html)
echo "<li><a href='" . $html. "'>". $valor ."</a></li>\n";
echo "</ul>";
?>