<?php 
$array = array("muy_corta" => "descri","corta" => "descripcion","mediana" => "descripcionCorta",
"larga" => "descripcionMediana","muy_larga" => "descripcionMuyLarga");
function sortByLength($a,$b){
    return strlen($b)-strlen($a);
}
uasort($array,'sortByLength');
foreach ($array as $key => $val) {
    echo "$key = $val<br/>";
}
?>