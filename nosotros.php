<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <section class="container my-5">
        <h2>Sobre Nosotros</h2>
        <p>Somos una empresa dedicada a ofrecer los mejores electrodomésticos para tu hogar, con un enfoque en calidad, innovación y satisfacción del cliente.</p>
    </section>

            <h1>"Tecnología para tu día a día"  </h1> <br>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <br>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/baner1.jpg" class="d-block w-100 " alt="..."  >
                  </div>
                  <div class="carousel-item">
                    <img src="img/baner2.jpg" class="d-block w-100 " alt="..."  >
                  </div>
                  <div class="carousel-item">
                    <img src="img/baner3.jpg" class="d-block w-100" alt="...">
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
            <div class="card" style="width: 18rem;">
                <img src="img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Contamos con todo lo necesario para el funcionamiento del hogar.</p>
                </div>
              </div>
            <div class="tex">
              <p>Encuentre todas las novedades!</p> <br>
                <p>Con precios accesibles para todo bolsillo</p>
            </div> </div>
              <div class="caja1">
              <div class="card" style="width: 18rem;">
                <img src="img/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">ElectroHogar es la tienda que usted necesita.</p>
                </div>
              </div></div>
              <div class="caja1">
              <div class="card" style="width: 18rem;">
                <img src="img/7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Nuestros productos cuentan con garantia hasta por dos años.</p>
                </div>
              </div></div>
              <div class="caja1">
              <div class="card" style="width: 18rem;">
                <img src="img/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Con creditos de hasta dos años.</p>
                </div>
              </div>
            </div>
            <div class="caja2">
            <p>
              <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Computadoras</a>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Lavadoras</button>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Computadoras</button>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3">.</button>
            </p>
            <div class="row">
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <div class="card card-body">
                    <img src="img/img1.jpg" class="card-img-top" alt="...">
                    <img src="img/img2.jpg" class="card-img-top" alt="...">

                  </div>
                </div>
              </div>
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                  <div class="card card-body">
                    <img src="img/img3.webp" class="card-img-top" alt="...">
                    <img src="img/img4.jpg" class="card-img-top" alt="...">

                  </div>
                </div>
              </div>
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                  <div class="card card-body">
                    <img src="img/img5.webp" class="card-img-top" alt="...">
                    <img src="img/img6.webp" class="card-img-top" alt="...">
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php
    incluirTemplate ('footer');
?>
