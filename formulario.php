<html>
<body>
<form action="formulario.php" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Correo: <input type="email" name="email"><br>
    Estudios: <select name="estudios" id="estudios">
        <option value="ESO">ESO</option>
        <option value="Bachillerato">Bachillerato</option>
        <option value="Formación profesional">FP</option>
        <option value="Universidad">Universidad</option>
    </select><br>
    Avatar: <input type="file" name="avatar"><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
<?php
    echo ($_GET["nombre"] .    "<br>");
    echo ($_GET["email"] .     "<br>");
    echo ($_GET["estudios"].   "<br>");
    echo ($_GET["avatar"] .    "<br>");
?>