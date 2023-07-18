<header class="d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="">
        <nav class="navbar__list">
            <ul>
                <li><a href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li><a href="<?php echo __ROOT__; ?>servicios">Servicios</a></li>
                <li><a href="<?php echo __ROOT__; ?>servicios">Solicitud</a></li>
                <li><a href="<?php echo __ROOT__; ?>servicios">Acerca</a></li>
                <li><a href="<?php echo __ROOT__; ?>#contacto">Contacto</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-primary btn--darkblue">
            Empezar
        </a>
    </div>
</header>

<header class="py-2 px-4 w-full d-lg-none">
    <div class="d-flex justify-content-between">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="">
        <button class="p-2 btn btn-primary btn--darkblue btn--square" onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="notShowed nav__mobile" id="mobileMenu">
    <div class="d-flex flex-column justify-content-between px-4 py-8 h-75">
        <div class="d-flex justify-content-between p-4">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png">
            <button class="btn btn-danger btn--square" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <nav class="navbar__list my-5">
            <ul class="flex-column">
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>servicios">Servicios</a></li>
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>servicios">Solicitud</a></li>
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>servicios">Acerca</a></li>
                <li class="my-3"><a class="h4 text-white" href="<?php echo __ROOT__; ?>#contacto">Contacto</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-primary btn--mediumblue">
            Empezar
        </a>

    </div>
</nav>