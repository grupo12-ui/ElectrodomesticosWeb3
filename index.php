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

    <div class="text-center my-2"><h1>"Tecnología para tu día a día"  </h1></div><br>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <br>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="build/img/banner1.jpg" class="d-block w-100 " style="height:500px" alt="..."  >
                  </div>
                  <div class="carousel-item">
                    <img src="build/img/banner2.webp" class="d-block w-100 " style="height:500px" alt="..."  >
                  </div>
                  <div class="carousel-item">
                    <img src="build/img/banner3.png" class="d-block w-100" style="height:500px" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="caja1">
                <div class="card bg-dark m-3 p-1" style="width: 18rem;">
                    <img src="build/img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text text-light">Contamos con todo lo necesario para el funcionamiento del hogar.</p>
                    </div>
                </div>
            
                <div class="card bg-dark m-3 p-1" style="width: 18rem;">
                    <img src="build/img/img2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-light">Con precios accesibles para todo bolsillo.</p>
                    </div>
                </div>
            
                <div class="card bg-dark m-3 p-1" style="width: 18rem;">
                    <img src="build/img/img3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text text-light">Con creditos de hasta dos años.</p>
                    </div>
                </div>
            
                <div class="card bg-dark m-3 p-1" style="width: 18rem;">
                    <img src="build/img/img4.png" class="card-img-top" alt="..."  style="filter: invert(100%);">
                    <div class="card-body">
                    <p class="card-text text-light">Nuestros productos cuentan con garantia hasta por tres años.</p>
                    </div>
                </div>
            </div>
    


    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 my-3">
                <div class="text-center">
                    <h2>Línea Blanca</h2>
                    <div class="card" style="width: 100%;">
                    <img src="build/img/lblanca.jpg" class="card-img-top"  alt="Productos Línea Blanca">
                        <div class="card-body">
                        <p class="card-text">
                        Los electrodomésticos de línea blanca son los esenciales en el hogar, diseñados 
                        para hacer de la cocina y la limpieza una experiencia más eficiente y cómoda. 
                        Entre ellos se encuentran refrigeradores, lavadoras, lavavajillas y hornos, todos 
                        con la última tecnología en eficiencia energética y un diseño moderno que se adapta 
                        a cualquier estilo de cocina. En nuestra tienda, encontrarás electrodomésticos de alta 
                        calidad que brindan fiabilidad y durabilidad, hechos para satisfacer todas las necesidades 
                        de tu hogar con un toque de elegancia en acabados de acero inoxidable y colores neutrales.
                        </p>
                        <a href="lblanca.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 my-3">
                <div class="text-center">
                    <h2>Línea Marrón</h2>
                    <div class="card" style="width: 100%;">
                    <img src="build/img/lmarron.png" class="card-img-top"  alt="Productos Línea Marrón">
                        <div class="card-body">
                        <p class="card-text">
                        La línea marrón abarca los equipos de entretenimiento y multimedia para el 
                        hogar, como televisores, sistemas de sonido, altavoces inteligentes y reproductores 
                        de video. Estos dispositivos combinan la última tecnología en calidad de imagen y 
                        sonido con un diseño atractivo, pensados para ofrecerte una experiencia de entretenimiento 
                        inigualable. Descubre televisores de alta resolución, sistemas de audio envolventes y 
                        equipos multimedia que elevan tu tiempo libre a otro nivel, con opciones para todas las 
                        preferencias y estilos, desde pantallas compactas hasta sistemas de cine en casa.
                        </p>
                        <a href="lmarron.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 my-3">
                <div class="text-center">
                    <h2>Línea Gris</h2>
                    <div class="card" style="width: 100%;">
                    <img src="build/img/lgris.jpg" class="card-img-top"  alt="Productos Línea Gris">
                        <div class="card-body">
                        <p class="card-text">
                        Los electrodomésticos de línea gris abarcan dispositivos tecnológicos y electrónicos 
                        grandes que complementan el hogar, como computadoras, periféricos, impresoras, consolas de 
                        videojuegos y algunos equipos de oficina. Diseñados para facilitar tanto el entretenimiento 
                        como las tareas laborales, estos productos destacan por su funcionalidad avanzada, conectividad 
                        y diseño moderno. La línea gris es perfecta para quienes buscan rendimiento y estilo en sus 
                        dispositivos, haciendo más eficiente y cómoda la vida en el hogar o el trabajo.
                        </p>
                        <a href="lgris.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 my-3">
                <div class="text-center">
                    <h2>PAE</h2>
                    <div class="card" style="width: 100%;">
                    <img src="build/img/pae.jpg" class="card-img-top"  alt="Productos Pae">
                        <div class="card-body">
                        <p class="card-text">
                        Los Pequeños Aparatos Electrodomésticos (PAE) son los aliados perfectos para hacer 
                        la vida diaria más cómoda y práctica. Desde cafeteras y hervidores hasta procesadores 
                        de alimentos y planchas, estos dispositivos están diseñados para tareas específicas 
                        que ahorran tiempo y esfuerzo. Nuestros PAE combinan tecnología avanzada con diseño 
                        compacto, ofreciendo soluciones funcionales para el hogar en aparatos de fácil manejo 
                        y gran eficiencia. Encuentra el complemento ideal para tu cocina y hogar, pensado para 
                        cubrir tus necesidades con estilo y conveniencia.
                        </p>
                        <a href="pae.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    incluirTemplate ('footer');
?>
