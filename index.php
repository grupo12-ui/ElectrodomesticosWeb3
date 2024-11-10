<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <!-- Contenido Principal -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Bienvenidos a Electrodomésticos</h1>
            <p class="lead">Encuentra los mejores electrodomésticos para cada rincón de tu hogar.</p>
        </div>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <h2>Cocina</h2>
                <p>Explora nuestra gama de electrodomésticos para la cocina.</p>
                <a href="cocina.php" class="btn btn-primary">Ver más</a>
            </div>
            <div class="col-md-4">
                <h2>Sala</h2>
                <p>Encuentra dispositivos para el entretenimiento y comodidad en tu sala.</p>
                <a href="sala.php" class="btn btn-primary">Ver más</a>
            </div>
            <div class="col-md-4">
                <h2>Dormitorio</h2>
                <p>Descubre electrodomésticos para un descanso perfecto en tu dormitorio.</p>
                <a href="dormitorio.php" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </section>
<?php
    incluirTemplate ('footer');
?>
