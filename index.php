<?php include('funciones.php'); ?>

    <?php get_header('CookTo - Cocinar para comer, compartir y aprender sobre comida', 'Plataforma que tiene el fin de conectar personas a través de la cocina con tres objetivos muy claros: Comer, compartir y aprender.'); ?>

    <section id="banner" class="container-fluid">
        <div class="row">
            <h1>Cocina experiencias</h1>
            <h2>Forma parte de ellas</h2>
            <a href="#que-es-cookto">Descubre más</a>
        </div>
        <div id="buscador" class="container">
            <input type="search" placeholder="¿Dónde te apetece comer hoy?" name="search" id="search">
            <a href="#">
                <span class="icon-buscador"></span>
            </a>
        </div>
    </section>


    <section id="que-es-cookto" class="container-fluid">

        <article class="row">
            <div class="descripcion col-md-6">
                <h2>¿Qué es Cookto?</h2>
                <p>No es una página sobre gastronomía, ni tampoco un simple repositorio de recetas,
                    <span>COOKTO </span>es todo eso y más.</p>
                <p>
                    <span>COOKTO</span> está inspirado en los modelos de economía colaborativa, ofreciendo una plataforma que tiene
                    el fin de conectar personas a través de la cocina con tres objetivos muy claros:</p>
                <p>
                    <span>Comer, Compartir y Aprender</span>
                </p>
            </div>
            <div class="imagen col-md-6">
                <img src="img/home-cookto.jpg" alt="¿Qué es CookTo?">
            </div>
        </article>

    </section>

    <section id="comer" class="container-fluid">

        <article class="row">
            <div class="imagen col-md-6">
                <img src="img/home-comer.jpg" alt="Comer">
            </div>
            <div class="descripcion col-md-6">
                <h2>Comer</h2>
                <p>¿Simple, no? Y así es como queremos que resulte tu experencia cuando entres aquí. Nosotros te proporcionamos
                    un buscador en el que podrás encontrar a gente de tu alrededor ofreciendo su casa y un plato de comida
                    cuando el hambre apriete..</p>
                <p>¿Y por qué utilizar
                    <span>COOKTO</span>? Porque ante todo, queremos que ahorres: como invitado, ofreciéndote una alternativa casera,
                    cercana y más económica que comprar comida en la calle, y como anfitrión, dándote la posibilidad de compartir
                    los gastos de una comida más abundante.</p>
            </div>
        </article>

    </section>

    <section id="compartir" class="container-fluid">

        <article class="row">
            <div class="descripcion col-md-6">
                <h2>Compartir</h2>
                <p>Queremos que vivas momentos únicos entre personas que no se conocen previamente y en las que se puede producir
                    no solo un enriquecimiento culinario o económico, sinó también personal</p>
                <p>Nuestro objetivo no es que este encuentro se reduzca a una simple ingesta de comida, nos encantaría que de
                    toda esta experiencia surgiesen aprendizajes, amistades y emociones.</p>
            </div>
            <div class="imagen col-md-6">
                <img src="img/home-compartir.jpg" alt="Compartir">
            </div>
        </article>

    </section>

    <section id="aprender" class="container-fluid">
        <article class="row">
            <div class="imagen col-md-6">
                <img src="img/home-aprender.jpg" alt="Aprender">
            </div>
            <div class="descripcion col-md-6">
                <h2>Aprender</h2>
                <p>Conocimientos gastronómicos, tanto por un intercambio verbal de información durante las conversaciones entre los comensales, como por el libre acceso a la enciclopedia de
                    <span>COOKTO</span>, una base de datos construída por todos los usuarios de la comunidad, con el fin de dar
                    a conocer recetas, procedimientos, truquillos de cocina o información sobre la cultura gastronómica
                    del país del usuario.</p>
            </div>
        </article>
    </section>

   <?php get_footer(); ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>

</html>