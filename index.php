<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookTo - Cocinar para comer, compartir y aprender. Cocina experiencias.</title>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="icons/icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<?php

include('funciones.php');

get_header();

?>

    <!-- <header id="header" class="navbar navbar-expand-lg">

        <div class="logo">
            <a class="navbar-brand" href="index.html">
                <img src="img/logotipo.png" alt="Logo CookTo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-hamburger-menu"></span>
        </button>
        <nav class="collapse navbar-collapse" id="navegacion">
            <div class="navbar-nav">
                <div class="comer">
                    <a class="nav-item nav-link" href="#">Comer
                        <span class="icon-comer"></span>
                    </a>
                    
                </div>
                <div class="compartir">
                    <a class="nav-item nav-link" href="#">Compartir<span class="icon-compartir"></span></a>
                    
                </div>
                <div class="aprender">
                    <a class="nav-item nav-link" href="#">Aprender<span class="icon-aprender"></span></a>
                    
                </div>
                <a class="nav-item nav-link" href="#">Accede</a>
            </div>
        </nav>
    </header> -->

    <section id="banner" class="container-fluid">
        <div class="row">
            <h1>Cocina experiencias</h1>
            <h2>Forma parte de ellas</h2>
            <a href="#queescookto">Descubre más</a>
        </div>
    </section>

    <section id="buscador" class="container">
        <input type="search" name="" id="">
        <a href="#">
            <span class="icon-buscador"></span>
        </a>
    </section>

    <section id="que-es-cookto" class="container">

        <article class="row">
            <div>
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
            <div class="imagen-que-es-cookto">
                <img src="img/home-cookto.jpg" alt="¿Qué es CookTo?">
            </div>
        </article>

    </section>

    <section id="comer" class="container">

        <article class="row">
            <div>
                <h2>Comer</h2>
                <p>¿Simple, no? Y así es como queremos que resulte tu experencia cuando entres aquí. Nosotros te proporcionamos
                    un buscador en el que podrás encontrar a gente de tu alrededor ofreciendo su casa y un plato de comida
                    cuando el hambre apriete..</p>
                <p>¿Y por qué utilizar
                    <span>COOKTO</span>? Porque ante todo, queremos que ahorres: como invitado, ofreciéndote una alternativa casera,
                    cercana y más económica que comprar comida en la calle, y como anfitrión, dándote la posibilidad de compartir
                    los gastos de una comida más abundante.</p>
            </div>
            <div class="imagen-comer">
                <img src="img/home-comer.jpg" alt="Comer">
            </div>
        </article>

    </section>

    <section id="compartir" class="container">

        <article class="row">
            <div>
                <h2>Compartir</h2>
                <p>Queremos que vivas momentos únicos entre personas que no se conocen previamente y en las que se puede producir
                    no solo un enriquecimiento culinario o económico, sinó también personal</p>
                <p>Nuestro objetivo no es que este encuentro se reduzca a una simple ingesta de comida, nos encantaría que de
                    toda esta experiencia surgiesen aprendizajes, amistades y emociones.</p>
            </div>
            <div class="imagen-compartir">
                <img src="img/home-compartir.jpg" alt="Compartir">
            </div>
        </article>

    </section>

    <section id="aprender" class="container">
        <article class="row">
            <div>
                <h2>Aprender</h2>
                <p>Conocimientos gastronómicos, tanto por un intercambio verbal de información durante la conversaciones que
                    entre los comensales, como por el libre acceso a la enciclopedia de
                    <span>COOKTO</span>, una base de datos construída por todos los usuarios de la comunidad, con el fin de dar
                    a conocer: recetas, procedimientos, truquillos de cocina o información sobre la cultura castronómica
                    del país del usuario.</p>
            </div>
            <div class="imagen-aprender">
                <img src="img/home-aprender.jpg" alt="Aprender">
            </div>
        </article>
    </section>

    <footer id="footer" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <p>&copy; 2018- 2019 COOKTO. Todos los derechos reservados.</p>
            </div>
            <div class="redes-sociales">
                <a href="">
                    <span class="icon-facebook"></span>
                </a>
                <a href="">
                    <span class="icon-twitter"></span>
                </a>
                <a href="">
                    <span class="icon-instagram"></span>
                </a>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>

</html>