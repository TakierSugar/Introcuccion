<?php
//E1
//$lista = array("Manuel","Alfonso","Cesar","Carlos","Didac");
//E2
/*var_dump(count($lista));*/
//E3
/*var_dump(implode(", ", $lista));*/
//E4
/*asort($lista);
foreach ($lista as $key=> $val) {
    echo "$key = $val\n";
}*/
//E5
/*$preserved = array_reverse($lista, true);
print_r($preserved);*/
//E6
/*$clave = array_search('Cesar', $lista);
echo $clave;*/
//E7 E8 y E9
/*$alumnos = [['id' => '01', 'nombre' => 'Daniel', 'edad' => '19'],
                 ['id' => '02', 'nombre' => 'Fernando', 'edad' => '23'],
                 ['id' => '03', 'nombre' => 'Andres', 'edad' => '20'],
                 ['id' => '04', 'nombre' => 'Luis', 'edad' => '21']];
?>
<table border = 1>
<?php
foreach ( $alumnos as $r ) {
        ?>
        <tr>
        <?php
        foreach ( $r as $v ) {
        ?>
                <td><?php echo $v;?></td>
        <?php
        }
        ?>
        </tr>
<?php
}
?>
</table>
<?php
$nombres = array_column($alumnos, 'nombre');
print_r($nombres);*/
/*$numeros = [12,56,23,59,27,11,22,8,9,44];
echo "sum(numeros) = " . array_sum($numeros);*/
?>