<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, correo, fecha_nacimiento, password) 
            VALUES ('$username', '$correo', '$fecha_nacimiento', '$password')";
    if ($mysqli->query($sql) === TRUE) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row"  style="text-align:center">
            <?php if($sql) { ?>
                <h3>REGISTRO GUARDADO</h3>
            <?php } else { ?>
                <h3>ERROR AL GUARDAR</h3>
            <?php } ?>
            <a href="login.php" class="btn btn-primary">Regresar Para Iniciar</a>
        </div>
    </div>
</body>
</html>