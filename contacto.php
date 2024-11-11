<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <section class="container my-5">
        <h2>Contactese con Infodomésticos</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide mx-auto" data-bs-ride="carousel" style="width: 50%;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="build/img/contactanosImg1.png" class="d-block w-100" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                        <img src="build/img/contactanosImg2.png" class="d-block w-100" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                        <img src="build/img/contactanosImg3.png" class="d-block w-100" alt="Imagen 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="build/css/cssContactanos.css">


            
<?php
    incluirTemplate ('footer');
?>
