<?php include '../funciones.php';?>
    <!-- CABECERA -->
    <?php get_header('Encuentra gente cerca con la que compartir un plato de comida.', 'Con nuestro buscador encontrarás gente dispuesta a ofrecerte su casa para comer.', "../");?>

    <!-- BANNER -->
    <section id="banner-buscador" class="container-fluid">
        <div class="row">
            <h1>Granada</h1>
        </div>
        <div id="buscador">
            <input type="search" placeholder="¿Dónde te apetece comer hoy?" name="search" id="search">
            <a href="#">
                <span class="icon-buscador"></span>
            </a>
        </div>
    </section>

    <!-- FILTROS -->

    <section id="filtros" class="container-fluid">
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

    <section id="anuncios" class="container-fluid">

    <h2>Hemos encontrado 50 resultados para tu búsqueda</h2>
      <div class="row">
        <div class="col-md-4">
        
          <div class="anuncio">
            <div class="foto-precio" title="Foto del evento">
              <span class="precio">15 €</span>
              <p class="titulo">Parrillada americana en terraza</p>
            </div>
            <div class="reserva">
              <div class="foto-reserva">
                <img class="foto-perfil" src="../img/buscador-perfil.jpg" alt="Foto del anfitrión">
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
          <div class="anuncio"></div>

        </div>
        <div class="col-md-4">
          <div class="anuncio"></div>

        </div>
      </div>
    </section>

    <!-- MAPA -->


     <!-- FOOTER -->
   <?php get_footer("../");?>