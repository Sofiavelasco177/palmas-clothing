
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">

</head>


<body class="login-body"> 

    
    <div class="login-container">
        <h1>Login</h1>
        
        <form  method="post" class="form-login" >
                <?php
                include ("conexion.php");
                include ("controlador.php");
                  ?>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text"  name="username"  >
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password"  name="password" id="input" >
            </div>
       
            <input type="submit" name="ingresar" value="INICIAR SESION" class="btn-login">
            
        </form>
    </div>

    



    
</body>
</html>