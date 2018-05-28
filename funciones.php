<?php

function get_header($titulo, $descripcion)
{
        echo '
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="' . $descripcion . '">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>' . $titulo . '</title>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="icons/icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <header id="header" class="navbar navbar-expand-lg">

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
                    <a class="nav-item nav-link" href="comer.php?titulo=comer">Come
                        <span class="icon-comer"></span>
                    </a>

                </div>
                <div class="compartir">
                    <a class="nav-item nav-link" href="#">Comparte<span class="icon-compartir"></span></a>

                </div>
                <div class="aprender">
                    <a class="nav-item nav-link" href="#">Aprende<span class="icon-aprender"></span></a>

                </div>
                <a class="nav-item nav-link" href="#">Accede</a>
            </div>
        </nav>
    </header>

';
    
}

function get_footer()
{
    echo ' <footer id="footer" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <p>&copy; 2018- 2019 COOKTO. Todos los derechos reservados.</p>
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
    </footer>';
}
