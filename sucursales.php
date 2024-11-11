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
                    <div class="card-body">
                            <iframe 
                                class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21637.945663586135!2d-68.1465754423701!3d-16.521829762283346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2060903bee59%3A0xf26344528dcb19e4!2sFaculty%20of%20Medicine%20-%20UMSA!5e0!3m2!1sen!2sbo!4v1728258755322!5m2!1sen!2sbo" 
                                width="max" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        <h5 class="card-title">Sucursal Facultad Medicina</h5>
                        <p class="card-text">Dirección: Calle 27 de Cota Cota, Zona Sur, La Paz, Bolivia.</p>
                        <p class="card-text">Teléfono: (591) 456-7890</p>
                        <p class="card-text">Horario: Lunes a Viernes 9:00am - 8:00pm</p>
                        <p class="card-text "><small class="text-body-secondary">
                        Cómo llegar: Se puede llegar en transporte público utilizando los minibuses que van 
                        hacia la zona sur de La Paz, o a través de la línea verde del teleférico hasta la estación 
                        Irpavi, y luego tomar un taxi o minibús hacia Cota Cota.
                        </small></p>
                    </div>
                </div>
            </div>
            <!-- Ejemplo de Sucursal 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21637.945663586135!2d-68.1465754423701!3d-16.521829762283346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f206520793ddd%3A0x53f6df346cc69976!2sHigher%20University%20of%20San%20Andr%C3%A9s%20(UMSA)!5e0!3m2!1sen!2sbo!4v1728260147226!5m2!1sen!2sbo" 
                            width="max" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <h5 class="card-title">Sucursal Monoblock</h5>
                        <p class="card-text">Dirección: Avenida Villazón, Plaza del Bicentenario, La Paz, Bolivia.</p>
                        <p class="card-text">Teléfono: (591) 654-3210</p>
                        <p class="card-text">Horario: Lunes a Sábado 9:00am - 7:00pm</p>
                        <p class="card-text text-dark"><small class="text-body-secondary">
                        Cómo llegar: Está ubicado en el centro de la ciudad, accesible en transporte 
                        público, minibuses que van hacia San Pedro o por la Avenida Busch. También se puede
                         llegar caminando desde la estación del teleférico amarillo (Estación Central). 
                        </small></p>
                    </div>
                </div>
            </div>
            <!-- Ejemplo de Sucursal 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21637.945663586135!2d-68.1465754423701!3d-16.521829762283346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f206520793ddd%3A0x53f6df346cc69976!2sHigher%20University%20of%20San%20Andr%C3%A9s%20(UMSA)!5e0!3m2!1sen!2sbo!4v1728260147226!5m2!1sen!2sbo" 
                            width="max" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <h5 class="card-title">Sucursal Monoblock B</h5>
                        <p class="card-text">Dirección: Plaza Central 789, Ciudad C</p>
                        <p class="card-text">Teléfono: (591) 123-4567</p>
                        <p class="card-text">Horario: Lunes a Domingo 10:00am - 6:00pm</p>
                        <p class="card-text text-dark"><small class="text-body-secondary">
                        Cómo llegar: Está ubicado en el centro de la ciudad, accesible en transporte 
                        público, minibuses que van hacia San Pedro o por la Avenida Busch. También se puede
                         llegar caminando desde la estación del teleférico amarillo (Estación Central). 
                        </small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    incluirTemplate ('footer');
?>
