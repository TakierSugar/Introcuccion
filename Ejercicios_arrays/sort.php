<?php 
 $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40"); 
 asort($edades);
    foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}
ksort($edades);
    foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}
arsort($edades);
    foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}
krsort($edades);
    foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}
?>