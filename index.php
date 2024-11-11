<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <!-- Contenido Principal -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Bienvenidos a Infodomésticos</h1>
            <p class="lead">Encuentra los mejores electrodomésticos para cada rincón de tu hogar.</p>
        </div>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 my-3">
                <h2>Línea Blanca</h2>
                <p>Explora nuestra gama de electrodomésticos que 
                    podríamos definir como “clásicos” dentro de la cocina, limpieza del hogar 
                    y lavado de ropa.</p>
                <a href="lblanca.php" class="btn btn-primary">Ver más</a>
            </div>
            <div class="col-md-6 my-3">
                <h2>Línea Marrón</h2>
                <p>Encuentra dispositivos para el entretenimiento y comodidad en tu hogar.
                    Esta línea de productos está referida a todos aquellos aparatos destinados 
                    al ocio, o con carácter multimedia.</p>
                <a href="lmarron.php" class="btn btn-primary">Ver más</a>
            </div>
            <div class="col-md-6 my-3">
                <h2>Línea Gris</h2>
                <p>Descubre electrodomésticos para un descanso perfecto en tu dormitorio.</p>
                <a href="lgris.php" class="btn btn-primary">Ver más</a>
            </div>
            <div class="col-md-6 my-3">
                <h2>PAE</h2>
                <p>Descubre electrodomésticos para un descanso perfecto en tu dormitorio.</p>
                <a href="pae.php" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </section>
<?php
    incluirTemplate ('footer');
?>
