<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <!-- Contenido de Sucursales -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Nuestras Sucursales</h2>
        <div class="row">
            <!-- Ejemplo de Sucursal 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/otros/sucursal1.jpg" class="card-img-top" alt="Sucursal Ciudad A">
                    <div class="card-body">
                        <h5 class="card-title">Sucursal Ciudad A</h5>
                        <p class="card-text">Dirección: Av. Principal 123, Ciudad A</p>
                        <p class="card-text">Teléfono: (123) 456-7890</p>
                        <p class="card-text">Horario: Lunes a Viernes 9:00am - 8:00pm</p>
                    </div>
                </div>
            </div>
            <!-- Ejemplo de Sucursal 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/otros/sucursal2.jpg" class="card-img-top" alt="Sucursal Ciudad B">
                    <div class="card-body">
                        <h5 class="card-title">Sucursal Ciudad B</h5>
                        <p class="card-text">Dirección: Calle Secundaria 456, Ciudad B</p>
                        <p class="card-text">Teléfono: (987) 654-3210</p>
                        <p class="card-text">Horario: Lunes a Sábado 9:00am - 7:00pm</p>
                    </div>
                </div>
            </div>
            <!-- Ejemplo de Sucursal 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/otros/sucursal3.jpg" class="card-img-top" alt="Sucursal Ciudad C">
                    <div class="card-body">
                        <h5 class="card-title">Sucursal Ciudad C</h5>
                        <p class="card-text">Dirección: Plaza Central 789, Ciudad C</p>
                        <p class="card-text">Teléfono: (555) 123-4567</p>
                        <p class="card-text">Horario: Lunes a Domingo 10:00am - 6:00pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    incluirTemplate ('footer');
?>
