<?php
header($language = "en");

if ($language == "en"){
    $content = "This page is in English";
    $title = "Página en inglés";
}else{
    $content = "Esta página está en Castellano (Idioma por defecto)";
    $title = "Página en español";
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="author" content="Víctor Ponz">
</head>    
<body>
    <?= $content ?>
</body>
</html>