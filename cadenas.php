
<?php
$nombre = $_GET['nombre'] ?? 'Alejandro';
echo $nombre;
print"\n";
//Ejemplo de trim
$trimed = trim($nombre, '/');
echo $trimed;
print"\n";
//Ejemplo strlen
echo strlen($nombre);
print"\n";
//Ejemplo strtoupper
echo strtoupper($nombre);
print"\n";
//Ejemplo strtolower
echo strtolower($nombre);
print"\n";
//Ejemplo strpos
$prefijo = $_GET['prefijo'] ?? 'val';
$pos = strpos($nombre, $prefijo);
if ($pos === false) {
    echo "La cadena '$prefijo' no fue encontrada en la cadena '$nombre'";
} else {
    echo "La cadena '$prefijo' fue encontrada en la cadena '$nombre'";
    echo " y existe en la posición $pos";
}
print"\n";
//Ejemplo substr_count
echo substr_count(strtoupper($nombre), strtoupper('a'));
print"\n";
//Ejemplo sacar la primera 'a' existente
$posicion = stripos($nombre, 'a');
if ($posicion === false) {
    echo "El string A no se encontró en el strng '$nombre'";
}
if ($posicion !== false) {
    echo "Se encontró la primera A en '$nombre' en la posición $posicion";
}
print"\n";
//Ejemplo str_ireplace
$cambio = str_ireplace("o", "0", $nombre);
echo $cambio;
print"\n";
//Ejemplo parse_url
$url = 'http://username:password@hostname:9090/path?arg=value';
var_dump(parse_url($url, PHP_URL_SCHEME));
print"\n";
var_dump(parse_url($url, PHP_URL_USER));
print"\n";
var_dump(parse_url($url, PHP_URL_PATH));
print"\n";
var_dump(parse_url($url, PHP_URL_QUERY));
?>