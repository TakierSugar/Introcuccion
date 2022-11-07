<?php
$dejameEntrar = $_GET['x'];

if($dejameEntrar == 0){
    header('Location: login.php');
}else if($dejameEntrar == 1){
    echo("Bienvenido");
}

?>