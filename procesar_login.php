<?php
session_start();
include("conexion.php");



$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario = ? AND clave = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $clave); // Usa hashing en producción
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $_SESSION['usuario'] = $usuario;
    header("Location: inicio.php");
} else {
    echo "<script>alert('Credenciales incorrectas'); window.location='Login.php';</script>";
}
?>
