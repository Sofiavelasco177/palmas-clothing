<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "palmas";

$conn = new mysqli($host, $usuario, $clave, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
