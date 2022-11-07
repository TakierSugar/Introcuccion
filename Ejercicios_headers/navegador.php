<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getBrowser($user_agent){
    if(strpos($user_agent, 'Firefox') !== FALSE)
    return 'Mozilla Firefox';
    else exit;}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>navegador.php</title>
</head>    
<body>
    <p>Un poco de contenido</p>
</body>
</html>