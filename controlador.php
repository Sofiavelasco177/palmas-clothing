<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

    $sql = "INSERT INTO usuarios (username, password) 
            VALUES ('$username', '$password')";
    if ($mysqli->query($sql) === TRUE) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>