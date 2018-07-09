<?php

function get_header($titulo, $descripcion, $nivel)
{
    echo '
    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="' . $descripcion . '">
    <meta name="keywords" content="cocina, compartir comida, aprender cocina, buscar comida, cocina colaborativa">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>' . $titulo . '</title>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="'.$nivel.'icons/icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="'.$nivel.'css/estilos.css">
</head>

<body>

    <header id="header" class="navbar navbar-expand-lg">

        <div class="logo">
            <a class="navbar-brand" href="'.$nivel.'index.php">
                <img src="'.$nivel.'img/logotipo.png" alt="Logo CookTo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-hamburger-menu"></span>
        </button>
        <nav class="collapse navbar-collapse" id="navegacion">
            <div class="navbar-nav">
                <div class="comer">
                    <a class="nav-item nav-link" href="'.$nivel.'buscador/search.php"><span>Comer</span>
                        <span class="icon-comer"></span>
                    </a>

                </div>
                <div class="compartir">
                    <a class="nav-item nav-link" href="'.$nivel.'#"><span>Compartir</span><span class="icon-compartir"></span></a>

                </div>
                <div class="aprender">
                    <a class="nav-item nav-link" href="'.$nivel. '#"><span>Aprender</span><span class="icon-aprender"></span></a>

                </div>
                <button class="nav-item nav-link" data-toggle="modal" data-target="#accede">Acceder</button>
            </div>
        </nav>
    </header>

';

}



function get_footer($nivel)
{
    echo '
    <!-- FOOTER -->
    <footer id="footer" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <p>&copy; 2018- 2019 <span>COOKTO</span>. Todos los derechos reservados.</p>
            </div>
            <div class="redes-sociales col-12">
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
        <!-- MENU LATERAL -->
    <aside id="menu-lateral">
        <a href="'.$nivel.'buscador/search.php"><span class="icon-comer"></span></a>
        <a href="'.$nivel.'#"><span class="icon-compartir"></span></a>
        <a href="'.$nivel.'#"><span class="icon-aprender"></span></a>
    </aside>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="'.$nivel.'js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

</body>

</html>
    ';
}

