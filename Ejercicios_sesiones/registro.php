<html>
    <body>
        <form>
            Nombre de usuario: <br><input type="text" name="nombre" value=""><br>
            Correo electrónico: <br><input type="text" name="email" value=""><br>
            Contraseña: <br><input type="text" name="contraseña" value=""><br>
            Confirmar Contraseña: <br><input type="text" name="contraseña2" value=""><br><br>
            <input type="submit" name="registrarse" value="REGISTRARSE"><br><br>
            ¿Ya eres miembro?<a href="http://127.0.0.1:8080/Ejercicios_sesiones/login.php">Acceso usuarios</a>
        </form>
    </body>
</html>
<?php
//parametros de la base de datos
$usuario='root';
$password='sa';
$servidor='localhost';
$bd_name = 'proyecto1';
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$contraseña = $_GET['contraseña'];
// Realiza conexion
if ($_GET['contraseña'] != $_GET['contraseña2']){
    echo ("Error al confirmar la contraseña");
}else{
$conexion = mysqli_connect($servidor, $usuario, $password, $bd_name);
    mysqli_select_db($conexion, $bd_name);
    $insertarDatos = "INSERT INTO users (username, email, password) VALUES ('$nombre','$email','$contraseña')";
    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
}
?>