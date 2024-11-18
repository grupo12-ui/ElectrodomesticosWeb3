<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <!-- Contenido de productos linea blanca -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Nuestros Productos de Linea Gris</h2>
        <div class="row">
            <?php
                include './includes/config/database.php';

                // Consulta para obtener los datos
                $consulta = "SELECT * FROM producto where categoria='LG'";
                $resultado = $conexion->query($consulta);

                
                if ($resultado->num_rows > 0) {
                    while($fila = $resultado->fetch_assoc()) {
                        echo '
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="./build/img/imgProd/'. $fila["idproducto"] .'.png" class="card-img-top" 
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">>
                                <div class="card-body">
                                    <h5 class="card-title">' . $fila["nombre"] . '</h5>
                                    <p class="card-text">Marca: ' . $fila["marca"] . '</p>
                                    <p class="card-text">Precio: $' . number_format($fila["precio"], 2) . '</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                } else {
                    echo "<h1>No hay productos de Línea Blanca disponibles</h1>";
                }
            ?>
        </div>
    </section>
<?php
    incluirTemplate ('footer');
?>