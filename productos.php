<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WB pets - Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <img src="image.png" height= "100"  alt="Imagen 1">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="nosotros.php">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="carrito.php">🛒 Carrito</a></li>
                  
                </ul>
            </div>
        </div>
    </nav>



<div class="container py-5">
    <h2 class="text-center mb-4">Nuestros Productos</h2>
    



    <div class="mb-3">
        <label for="TipoMascota">Que quieres comprar:</label>
        <select id="opciones" name="opciones" class="form-control">
            <option value="opcion1">Seleccione  ... </option>
            <option value="opcion2">Mujer</option>
            <option value="opcion3">Hombres</option>
            <option value="opcion4">Niños</option>
            <option value="opcion5">Niñas</option>
        </select>
    </div>
    <div class="row">


        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/deslanador.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Deslanador para caninos</h5>
                    <p class="card-text">Quita el pelo muerto de tu canino.</p>
                    <p class="card-text">38.000</p>
                    <button class="btn btn-info" 
                        data-bs-toggle="modal" 
                        data-bs-target="#detalle-producto"
                        data-bs-nombre="Deslanador para caninos"
                        data-bs-precio="38.000"
                        data-bs-descripcion="El mejor deslanador para mantener el pelaje de tu mascota, sano y libre de pelo muerto.">
                        Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito" 
                    data-nombre="Deslanador para caninos" 
                    data-precio="38.000">Agregar al carrito
                </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/transportador.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Transportador para caninos</h5>
                    <p class="card-text">Espacio comodo para que tu canino viaje tranquilo.</p>
                    <p class="card-text">90.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Transportador para caninos."
                    data-bs-precio="90.000"
                    data-bs-descripcion="Comodo para poder tranportar a tu mascota a cualquier lugar.">
                    Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito" 
                    data-nombre="Transportador para caninos" 
                    data-precio="90.000">Agregar al carrito
                </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/gimnasio gatos.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Gimnasio para gatos</h5>
                    <p class="card-text">Entretenedor y ejercitador para tu gato.</p>
                    <p class="card-text">100.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Gimnasio para gatos."
                    data-bs-precio="100.000"
                    data-bs-descripcion="Entretenedor y ejercitador para tu gato.">
                    Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito"
                     data-nombre="Gimnasio para gatos" 
                     data-precio="100.000">Agregar al carrito
                    </button>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="imagenes/productos/alimento.webp" class="card-img-top" alt="Producto 3">
                    <h5 class="card-title">Alimento  Medium </h5>
                    <p class="card-text">Alimento para tu cachorro 'Royal canin 500 gr'.</p>
                    <p class="card-text">$20.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Alimento Medium."
                    data-bs-precio="20.000"
                    data-bs-descripcion="El mejor alimento nutritivo para tu cachorrito.">
                    Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito"
                     data-nombre="Alimento Medium" 
                     data-precio="20.000">Agregar al carrito
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/colchon.jpg" class="card-img-top" alt="Producto 4">
                <div class="card-body">
                    <h5 class="card-title">colchones suaves y termicos</h5>
                    <p class="card-text">Suave y calientito para tu mascota.</p>
                    <p class="card-text">Size: XL</p>
                    <p class="card-text">$15.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Colchones suaves y termicos."
                    data-bs-precio="15.000"
                    data-bs-descripcion="Suave y calientito para tu mascota.">
                    Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito" 
                    data-nombre="colchones suaves y termicos" 
                    data-precio="15.000">Agregar al carrito
                </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/kit.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Kit de aseo</h5>
                    <p class="card-text">Lo mejor en productos para el aseo de tu mejor amigo.</p>
                    <p class="card-text">80.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Kit de aseo."
                    data-bs-precio="80.000"
                    data-bs-descripcion="Lo mejor en productos para el aseo de tu mejor amigo.">
                    Ver detalles
                    <button class="btn btn-primary agregar-carrito"
                     data-nombre="Kit de aseo" 
                     data-precio="80.000">Agregar al carrito
                    </button>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/collar.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Collar para gatos</h5>
                    <p class="card-text">Lindo y comodo para tu gato.</p>
                    <p class="card-text">28.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Collar para gatos."
                    data-bs-precio="28.000"
                    data-bs-descripcion="Lindo y comodo para tu gato.">
                    Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito" 
                    data-nombre="Collar para gatos" 
                    data-precio="28.000">Agregar al carrito
                </button>
                </div>
            </div>
        </div>
       
        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/pecera.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Pecera pequeña</h5>
                    <p class="card-text">Linda y comoda para tus peces.</p>
                    <p class="card-text">38.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Pecera pequeña."
                    data-bs-precio="38.000"
                    data-bs-descripcion="linda y comoda para tus peces.">
                    Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito" 
                    data-nombre="Pecera pequeña" 
                    data-precio="38.000">Agregar al carrito
                </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/productos/comedero de aves.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Comedero para aves</h5>
                    <p class="card-text">Comoda para alcenar la comida de tus aves.</p>
                    <p class="card-text">32.000</p>
                    <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Comedero para aves."
                    data-bs-precio="32.000"
                    data-bs-descripcion="Comoda para almacenar la comida de tus aves.">
                    Ver detalles
                    </button>
                    <button class="btn btn-primary agregar-carrito" 
                    data-nombre="Comedero Para Aves" 
                    data-precio="32.000">Agregar al carrito
                </button>
                </div>
            </div>
        </div>


    </div>

    <h2 class="text-center mb-4">Nuevos Productos </h2>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <img src="imagenes/productos/nuevo producto can.jpg" class="card-img-top" alt="Producto 3">
                <h5 class="card-title">Alimento para perros cachorros </h5>
                <p class="card-text">El mejor alimento nutritivo que ayuda al crecimiento  sano de tu cachorro.</p>
                <p class="card-text">$20.000</p>
                <button class="btn btn-info" 
                    data-bs-toggle="modal" 
                    data-bs-target="#detalle-producto"
                    data-bs-nombre="Alimento para cachorros."
                    data-bs-precio="20.000"
                    data-bs-descripcion="El mejor alimento nutritivo que ayuda al crecimiento  sano de tu cachorro.">
                    Ver detalles
                </button>
                <button class="btn btn-primary agregar-carrito"
                 data-nombre="Alimento para perros cachorros" 
                 data-precio="20.000">Agregar al carrito
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <img src="imagenes/productos/comida humeda para gatos.jpg" class="card-img-top" alt="Producto 4">
                <h5 class="card-title">Comida Humeda Gatos</h5>
                <p class="card-text">Nutritiva y ayuda al crecimiento sano de tu gatuno</p>
                <p class="card-text">$16.000</p>
                <button class="btn btn-info" 
                data-bs-toggle="modal" 
                data-bs-target="#detalle-producto"
                data-bs-nombre="Comida humeda para gatos."
                data-bs-precio="16.000"
                data-bs-descripcion="Nutritiva y ayuda al crecimiento sano de tu gatuno.">
                Ver detalles
                </button>
                <button class="btn btn-primary agregar-carrito" 
                data-nombre="Comida Humeda Para Gatos"
                 data-precio="16.000">Agregar al carrito
                </button>
            </div>
        </div>
    </div>


</div>
<!-- Modal de Detalles del Producto -->
<div class="modal fade" id="detalle-producto" tabindex="-1" aria-labelledby="detalleProductoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detalleProductoLabel">Detalles del Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <h5 id="modal-nombre"></h5>
          <p id="modal-precio"></p>
          <p id="modal-descripcion"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var modal = document.getElementById('detalle-producto');
    
      modal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Botón que abrió el modal
        var nombre = button.getAttribute('data-bs-nombre');
        var precio = button.getAttribute('data-bs-precio');
        var descripcion = button.getAttribute('data-bs-descripcion');
    
        // Insertar valores en el modal
        modal.querySelector('#modal-nombre').textContent = nombre;
        modal.querySelector('#modal-precio').textContent = 'Precio: $' + precio;
        modal.querySelector('#modal-descripcion').textContent = descripcion;
      });
    });
    </script>



<script>
    document.addEventListener("DOMContentLoaded", () => {
        const botonesAgregar = document.querySelectorAll(".agregar-carrito");

        botonesAgregar.forEach(boton => {
            boton.addEventListener("click", () => {
                const nombre = boton.dataset.nombre;
                const precio = boton.dataset.precio;

                let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

                const productoExistente = carrito.find(producto => producto.nombre === nombre);

                if (productoExistente) {
                    productoExistente.cantidad++;
                } else {
                    carrito.push({ nombre, precio, cantidad: 1 });
                }

                localStorage.setItem("carrito", JSON.stringify(carrito));
                alert("Producto agregado al carrito");
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <footer>
        <div class="izquierda">
            <h5 id="modal-product-title">Información de Contacto</h5>
            <i class="bi bi-telephone-outbound-fill">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/></svg>(57)3170802390</i><br>
            <i class="bi bi-geo-alt-fill">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                </svg>Cra 3 #11-34 velez santander</i><br>
            <i class="bi bi-envelope-plus-fill">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 4.697v4.974A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-1.965.45l-.338-.207z"/>
                    <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/></svg>PalmasClothing777@gmail.com</i>
        </div>
        <!-- Información centrada -->
        <div class="centro">
            <h5 id="modal-product-title">PALMAS CLOTHING</h5>
            <p class="card-description">CAMINA CON ESTILO, PISA CON CONFIANZA</p>
            <h5 id="modal-product-title">Redes Sociales</h5>
            <div class="social-icons">
                <i class="bi bi-facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                </i>
                <i class="bi bi-twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                    </svg>
                </i>
                <i class="bi bi-youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                </div>
                </i>
            </div>
        </div>
    </div>
    </div>
    
    <div class="derecha">
    <h5 id="modal-product-title">PALMAS CLOTHING, presta atencion</h5>
    <p class="card-description">Lunes - Domingo</p>
    <p class="card-description">24/7 TODOS LOS DIAS</p>
    <hr>
    
    </div>
    </div>
    
    <!-- Contenedor principal con Flexbox -->
    <div class="footer-content">
    <!-- Información a la izquierda -->
    <div class="centro">
        <p>&copy; PALMAS CLOTHING. Todos los derechos reservados al GRUPO 9 ADSO.</p>
        
    </footer>
</body>
</html>