
<html>
    <body>
        <form action="login.php">
            Usuario: <input type="text" name="username"><br>
            Contraseña: <input type="text" name="password"><br>
            <input type="submit" value="Acceder"><br>
            ¿Todavía no eres miembro?<a href="http://127.0.0.1:8080/Ejercicios_sesiones/registro.php">Registrarse</a> 
        </form>
    </body>
</html>

<?php
$usuario='root';
$password='sa';
$servidor='localhost';
$bd_name = 'proyecto1';
$nombre = $_GET['nombre'];
$contraseña = $_GET['contraseña'];

$conexion = mysqli_connect($usuario, $password, $servidor, $bd_name);

$sql = "SELECT username FROM users";
$datos = mysqli_query($conexion, $sql);

/*
session_start();

$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true
);

$pdo = new PDO(
    'mysql:host=localhost;dbname=users;charset=utf8',
    'root',
    'sa',
$opciones);

$username =$_POST['username'] ?? "";
$password =$_POST['password'] ?? "";
$sql = "SELECT * FROM users where username='$username' and password = '$password'";

$resultado = $pdo->query($sql);
if($resultado){
    $_SESSION['username'] = $resultado["username"];
}else{
    echo "El usuario no existe";
}*/
?>