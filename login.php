<?php

session_start();
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username = '$username' LIMIT 1";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        if (password_verify($password, $usuario['password'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['username'] = $usuario['username'];
            header("Location: inicio.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>



<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Palmas</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <div class="login-container">
        <img src="LOGO.jpg" alt="Palm Logo" class="logo">
        <h1>PALMAS CLOTHING</h1>
        <form id="loginForm" method="post" >
            <div class="input-group">
                <label for="username">USUARIO</label>
                <input type="text" id="username" name="username" required placeholder="USUARIO">
            </div>
            <div class="input-group">
                <label for="password">CONTRASEÑA</label>
                <input type="password" id="password" name="password" required placeholder="CONTRASEÑA">
            </div>
            <button type="submit" id="loginButton">
                <img src="palm_leaf_icon.png" alt="" class="button-icon">
                ENTRAR
            </button>
        </form>
        <div id="messageArea"></div>
    </div>
   
</body>
</html>