<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


<?php
include 'conectar.php';

// Procesar el formulario de inserción
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $idsucursal = rand(1,10);

    $sql = "INSERT INTO cliente (nombre, paterno, materno, email, telefono, idsucursal) VALUES ('$nombre', '$paterno', '$materno', '$email', '$telefono', '$idsucursal')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p style='color:green; text-align:center;'>Recibimos tu mensaje</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error: " . $conexion->error . "</p>";
    }
}
?>


<section class="container my-5">
    <div class="row">
        <!-- Sección de contacto -->
        <div class="col-md-6">
            <header class="bg-primary text-white text-center py-5">
                <div class="container">
                    <h3 class="display-7">Dejanos tu Contacto</h3>
                </div>
            </header>
            <form method="POST" action="">
                <div class="row">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="col mb-3">
                        <label for="name" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno"  required>
                    </div>
                    <div class="col mb-3">
                        <label for="name" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="email" class="form-label">Correo Electrónico :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col mb-3">
                        <label for="telefono" class="form-label"> Telefono :</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje :</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Quieres dejarnos un mensaje ? tu mensaje sera muy importante para nosotros"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <!-- Carrusel de imágenes -->
        <div class="col-md-6">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://acortar.link/zoQQwZ" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://acortar.link/kQ3pVT" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://acortar.link/Rb5Pl4" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>


<?php
    incluirTemplate ('footer');
?>
