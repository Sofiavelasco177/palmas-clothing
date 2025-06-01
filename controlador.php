<?php
if (!empty($_POST["ingresar"])) {
    if (empty($_POST["username"]) and empty($_POST["password"])) {
        echo "<script>alert('Por favor ingrse usuario y contrasena.')</script>";
        
    } else {
        
         $username = $_POST["username"];
         $password = $_POST["password"];
         $sql = $conexion->query("SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'");
         if ($datos = $sql->fetch_object()) {
             header("location:inicio.php");
            # code...
         }else {
                echo "<script>alert('Usuario o contraseña incorrectos.')</script>";
         }
        # code...
    }
    # code...
}



?>