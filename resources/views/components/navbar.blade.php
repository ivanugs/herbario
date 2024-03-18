<div class="header-gob-custom">
    <a class="" href="//www.gob.mx/" target="_blank">
        <img src="{{ asset('images/header/pleca-gob1.webp') }}" alt="Gobierno de México" class="img-fluid" loading="lazy">
    </a>
    <a class="" href="//www.gob.mx/sep" target="_blank">
        <img src="{{ asset('images/header/pleca-gob2.webp') }}" alt="Educación" class="img-fluid" loading="lazy">
    </a>
    <a class="" href="">
        <img src="{{ asset('images/header/pleca_tecnm.webp') }}" alt="TecNM" class="img-fluid" loading="lazy">
    </a>
    <a class="" href="//www.tlajomulco.tecnm.mx/" target="_blank">
        <img style="padding-left:20px; align-self: flex-end;" src="{{ asset('images/header/pleca-ittj.png') }}" alt="TecNM" class="img-fluid" loading="lazy">
    </a>
</div>

<nav class="navbar navbar-expand-lg fixed-top bg-navbar-custom p-2">
    <div class="container-fluid">
        <div class="head-custom">
            <a class="navbar-brand me-auto title-custom text-white p-0" href="index.php">Herbario Virtual
                <span class="subt-custom">INSTITUTO TECNOLOGICO DE TLAJOMULCO, JALISCO.</span> 
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title offcanvas-title-custom" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body offcanvas-body-custom">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="listado.php">Ordenado por Nombre</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="#">Ordenado por Familia</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="#">Biblioteca</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link mx-lg-5 a-custom" href="#">Malezas</a>
                </li>
                <li class="nav-item nav-item-custom dropdown">
                <a class="nav-link dropdown-toggle mx-lg-5 a-custom" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Acerca Del Herbario
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Resumen del Proyecto</a></li>
                    <li><a class="dropdown-item" href="#">Antecedentes</a></li>
                    <li><a class="dropdown-item" href="#">Importancia</a></li>
                    <li><a class="dropdown-item" href="#">Agradecimientos</a></li>
                    <li><a class="dropdown-item" href="#">Equipo</a></li>
                </ul>
            </ul>
        </div>
        </div>
    </div>
</nav>