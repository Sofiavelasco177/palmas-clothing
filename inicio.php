<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
echo "Bienvenido, " . $_SESSION['username'] . "!";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palmas Clothing - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  navbar-custom fixed-top">
        <div class="container">
            <img src="LOGO.jpg" height= "100"  alt="Imagen 1">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>  
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="productos.html">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.html">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="nosotros.html"> Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="carrito.html"><i class="bi bi-cart3"></i></a></li>
                    <li class="nav-item"><a class="nav-link active" href="Login.html"><i class="bi bi-person"></i></a></li>
                    <li class="nav-item"><a class="nav-link active" href="registro.php"><i class="bi bi-person-plus"></i></a></li>
                    <a class="whatsapp" href="https://wa.me/573232497247" target="_blank" title="Chatea con nosotros" img src="112.jpg" alt="WhatsApp">
                        <img src="wa.jpg" alt="WhatsApp" width="40" height="40">

</a>
                </ul>
            </div>
        </div>
    </nav>
<br>
    <!-- Carrusel -->

    
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">    
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="zz1.jpg" class="d-block w-40" alt="oferta especial">
            </div>
            <div class="carousel-item">
                <img src="zz2.jpg" class="d-block w-40" alt="nuevos productos">
            </div>
            <div class="carousel-item">
                <img src="zz3.jpg" class="d-block w-40" alt="servicio destacado">
            </div>
            <div class="carousel-item">
                <img src="zz4.jpg" class="d-block w-40" alt="servicio destacado">
            </div>
            <div class="carousel-item">
                <img src="zz5.jpg" class="d-block w-40" alt="servicio destacado">
            </div><div class="carousel-item">
                <img src="zz6.jpg" class="d-block w-40" alt="servicio destacado">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        </div>
        

</body>
</html>

    </div>

        <footer>
        <div class="izquierda">
            <h5>Información de Contacto</h5>
            <p><i class="bi bi-geo-alt-fill"></i> Centro Comercial Velez Plaza Local 104 Velez-Santander.</p>
            <p><i class="bi bi-envelope-plus-fill"></i> Palmas.clothing24cimitarra@gmail.com</p>
        </div>

        <div class="centro">
            <h5>PALMAS CLOTHING</h5>
            <p class="card-description">DEL BARRIO PARA LA FAMA.</p>
            <h5>Redes Sociales</h5>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>

        <div class="derecha">
            <h5>Horario de Atención</h5>  
            <p class="card-description">Lunes - Domingo</p>
            <p class="card-description">9am a 12 pm - 2pm a 8pm</p>
        </div>

        <div class="footer-content">
            <div class="centro">
                <p>&copy; Derechos Reservados</p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
