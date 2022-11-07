<?php
function partlist($array){
    $list = [];
    for ($i=1; $i < count($array); $i++) { 
        $TrozoA = array_slice($array, 0, $i);
        $TrozoA = implode(" ",$TrozoA);
        $TrozoB = array_slice($array, $i);
        $TrozoB = implode(" ",$TrozoB);
        $list[] = [$TrozoA,$TrozoB];
    }
    return $list;
}
print_r(partlist(["Seguro", "que", "apruebo", "esta", "asignatura"]));
?>