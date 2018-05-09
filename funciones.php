<?php

function get_header(){
    echo '<header id="header" class="navbar navbar-expand-lg">

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
    </header>
';
}

?>