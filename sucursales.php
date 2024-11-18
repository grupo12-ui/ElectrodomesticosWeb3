<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <!-- Contenido de Sucursales -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Nuestras Sucursales</h2>
        <div class="row">
            <!-- Sucursales -->
            <?php
                include './includes/config/database.php';

                // Consulta para obtener los datos
                $consulta = "SELECT * FROM sucursal";
                $resultado = $conexion->query($consulta);

                
                if ($resultado->num_rows > 0) {
                    while($fila = $resultado->fetch_assoc()) {
                        echo '
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <iframe 
                                        src="' . $fila["iframe"] . '" 
                                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                    <h5 class="card-title">Sucursal ' . $fila["nombre"] . '</h5>
                                    <p class="card-text">Dirección: ' . $fila["direccion"] . '</p>
                                    <p class="card-text">Teléfono: ' . $fila["telefono"] . '</p>
                                    <p class="card-text">Horario: ' . $fila["horarios"] . '</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                } else {
                    echo "<h1>No hay Sucursales disponibles</h1>";
                }
            ?>
        </div>
    </section>
<?php
    incluirTemplate ('footer');
?>
