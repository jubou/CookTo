<?php include '../funciones.php';?>
    <!-- CABECERA -->
    <?php get_header('Encuentra gente cerca con la que compartir un plato de comida.', 'Con nuestro buscador encontrarás gente dispuesta a ofrecerte su casa para comer.', "../");?>

    <!-- BANNER -->
    <section id="banner-buscador" class="container-fluid">
        <div class="row">
            <h1>Granada</h1>
        </div>
        <div id="buscador" class="container">
            <input type="search" placeholder="¿Dónde te apetece comer hoy?" name="search" id="search">
            <a href="#">
                <span class="icon-buscador"></span>
            </a>
        </div>
    </section>

    <!-- FILTROS -->

    <section id="filtros" class="container">
      <div class="row">
        
        <div class="col-lg-6">
          <span class="icon-fecha"></span>
          <span class="icon-personas"></span>
          <span class="icon-bebidas"></span>
        </div>

        <div class="col-lg-6">
          <span class="icon-ubicacion"></span>
          <span class="icon-precio"></span>
          <span class="icon-intolerancias"></span>
        </div>
      </div>
    </section>

    <!-- ANUNCIOS -->

    <section id="anuncios" class="container">
      <div class="row">
        <div class="col-md-4">
        
          <div class="anuncio1">
            <div class="foto-precio">
              <div class="precio"></div>
              <p class="caption">Parrillada americana</p>
            </div>
            <div class="reserva">
              <div class="foto-reserva">
                <div class="foto"></div>
                <a href="#" class="reserva">¡Reserva ya!</a>
              </div>
              <div class="conoce-valoracion">
                <p class="conoce"></p>
                <div class="valoracion">
                  <span class="icon-buscador"></span>
                  <p>(278)</p>
                </div>
              </div>
            </div>
          </div>


        </div>
        <div class="col-md-4">
          <div class="anuncio2"></div>

        </div>
        <div class="col-md-4">
          <div class="anuncio3"></div>

        </div>
      </div>
    </section>

    <!-- MAPA -->


     <!-- FOOTER -->
   <?php get_footer("../");?>