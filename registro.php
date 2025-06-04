
<html lang="es">


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
        <form id="loginForm" method="post" action="controlador.php">
            <div class="input-group">
                <label for="">USUARIO</label>
                <input type="text" id="username" name="username"  placeholder="USUARIO" require >
            </div>
            <div class="input-group">
                <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"  placeholder="FECHA DE NACIMIENTO"  require>
            </div>
            <div class="input-group">
                <label for="">CORREO</label>
                <input type="email" id="correo" name="correo"  placeholder="CORREO" require >
            </div>
             <div class="input-group">
                <label for="">CONTRASEÑA</label>
                <input type="password" id="password" name="password"  placeholder="CONTRASEÑA" require>
            <button type="submit" id="loginButton">
                <img src="palm_leaf_icon.png" alt="" class="button-icon">
                REGISTRARSE
            </button>
        </form>
       
    </div>

</body>
</html>