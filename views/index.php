<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="container grid--2cols">
        <div style="background-color: var(--medium-blue);" class="p-4 d-flex flex-column justify-content-center">
            <h2 class="text-white">
                U.V. Márquez y Moncada, Normatividad Confiable, <br>
                <span class="font-weight-light" style="color: var(--yellow);">Unidad de Inspección</span>
            </h2>
        </div>
        <div id="carouselHome" class="splide overflow-hidden" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/carousel1.png" class="w-100 h-100 of--cover">
                    </li>
                    <li class="splide__slide position-relative">
                        <div class="position-absolute w-100 h-100 d-flex flex-column justify-content-between">
                            <div class="text-center text--darkBlue p-4">
                                <h5>Sigue este</h5>
                                <h2>Consejo</h2>
                                <h5>para</h5>
                                <h3>importaciones seguras con unidades aprobadas</h3>
                            </div>
                            <img src="<?php echo __ROOT__; ?>/public/img/home/carousel3.png" class="mx-auto w-100">
                        </div>
                    </li>
                    <li class="splide__slide p-4" style="background-color: var(--medium-blue);">
                        <p class="text-white text--md text-center">
                            Antes de contratar los servicios de una <span class="text--yellow">Unidad de inspección</span> debes asegurarte que se encuentren acreditadas y aprobadas para llevar acabo su labor
                        </p>
                        <h3 class="text--yellow">¿Quien acredita y aprueba las UI? </h3>
                        <div class="row text-white">
                            <div class="col">
                                <h4 class="text-center">Acreditación</h4>
                                <ul>
                                    <li>Entidad Mexicana de
                                        Acreditación (ema)</li>
                                    <li>Mexicana de acreditación
                                        A.C. (MAAC)</li>
                                    <li>SIAAC Sociedad Internacional
                                        de Acreditación</li>
                                </ul>
                            </div>
                            <div class="col">
                                <h4 class="text-center">Aprobación</h4>
                                <ul>
                                    <li>Dirección general de Normas
                                        (DGN)</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide position-relative">
                        <div class="position-absolute p-4 w-100 h-100">
                            <h3 class="text--mediumBlue mb-4 text-center">Consecuencias</h3>
                            <div class="text-start w-100 mb-4">
                                <ul class="text--mediumBlue">
                                    <li>Invalidación de folios</li>
                                    <li>Incumplimiento normativo</li>
                                    <li>Riesgo de seguridad para los consumidores</li>
                                    <li>Retrasos en las operaciones</li>
                                    <li>Multas y sanciones</li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo __ROOT__; ?>/public/img/home/carousel2.png" style="width: 240px;" class="mx-auto">
                            </div>
                        </div>
                        <img src="<?php echo __ROOT__; ?>/public/img/home/carouselBg.png" class="w-100">
                    </li>
                    <li class="splide__slide position-relative">
                        <div class="position-absolute p-4 text-center">
                            <h3 class="text--mediumBlue mb-4">Acreditación y aprobación</h3>
                            <p class="text--mediumBlue text--md mb-2">U.V Marquez y Moncada está <span class="text--yellow">acreditada y aprobada</span> por la ema, la DGN respectivamente.</p>
                            <p class="text--mediumBlue text--md">Está información se puede verificar mediante el Diario Oficial de la Federación (DOF).</p>
                        </div>
                        <img src="<?php echo __ROOT__; ?>/public/img/home/carouselBg.png" class="w-100 h-100">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container grid--2cols align-items-center py-4">
        <div class="p-4 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/home/libera.png" class="w-75">
        </div>
        <div class="text--darkBlue p-1 p-lg-5">
            <h3>¡Libera tu mercancía de aduana en 24 horas o menos!</h3>
            <p>
                Ahorra tiempo y recursos en tus operaciones comerciales y dile adiós a las multas, sanciones, almacenajes y demoras
            </p>
        </div>
    </section>
    <section class="container-fluid py-5 bg--mediumBlue" id="unidadDeInspeccion">
        <div class="container">
            <header class="text-center text--white mb-5 w--50 mx-auto">
                <h2 class="fw-bold mb-4 text--yellow">Unidad de inspección</h2>
                <p class="text--md">
                    Normas de información comercial
                </p>
                <p class="text--sm">
                    Determinan la información comercial y requisitos que deben cumplir las etiquetas, envases, embalajes para dar información al consumidor
                </p>
            </header>
            <?php include 'components/cardsInspeccion.php'; ?>
            <footer class="text-center m-4">
                <div class="row justify-content-center">
                    <a href="<?php echo __ROOT__; ?>servicio" class="btn btn--yellow px-5 py-3 m-2">
                        Conoce más <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                    <a href="<?php echo __ROOT__; ?>solicitud" class="btn btn--yellow px-5 py-3 m-2">
                        Solicitar servicio <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                </div>
                <div class="row justify-content-center">
                    <a href="<?php echo __ROOT__; ?>landingNom" class="btn btn--yellow px-5 py-3 m-2">
                        Consulta catálogo de NOMs y NMX <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                </div>
            </footer>
        </div>
    </section>
    <section class="container py-4">
        <header class="text-center mb-5 w--50 mx-auto">
            <h2 class="text--darkBlue fw-bold mb-2">Normas de seguridad</h2>
            <p class="text--sm text--gray">
                Son regulaciones técnicas que establecen los requisitos mínimos para garantizar la seguridad y calidad de los productos y servicios en México.
            </p>
        </header>

        <?php include 'components/cardsNormas.php'; ?>

        <footer class="text-center m-4">
            <div class="row justify-content-center">
                <a href="<?php echo __ROOT__; ?>normas" class="btn btn--yellow px-5 py-3 m-2">
                    Conoce más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
                <a href="<?php echo __ROOT__; ?>solicitud" class="btn btn--yellow px-5 py-3 m-2">
                    Solicitar servicio <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <div class="row justify-content-center">
                <a href="<?php echo __ROOT__; ?>landingNom" class="btn btn--yellow px-5 py-3 m-2">
                    Consulta catálogo de NOMs y NMX <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
        </footer>
    </section>
    <section id="OtrosServiciosHome" class="container my-4">
        <div class="text-center font-bold">
            <h2 class="text--darkBlue font-weight-bold">Otros Servicios</h2>
            <p class="text--gray">
                Ampliamos nuestros servicios adicionales integrados a tus operaciones comerciales con el objetivo de optimizar la eficiencia y maximizar la utilización de recursos, lo que resulta en una reducción significativa de tiempos y costos
            </p>
        </div>
        <div class="grid--2cols text-center">
            <div class="my-4">
                <img class="rounded-lg w-75 mx-auto" src="<?php echo __ROOT__; ?>/public/img/home/etiquetado.png">
                <h3><b>Etiquetado</b></h3>
                <p class="text--gray">Diseño y colocación de etiquetas adheribles y textiles.</p>
                <a href="<?php echo __ROOT__; ?>landingEtiqueta" class="btn btn--yellow px-5 py-3 m-2">
                    Conoce más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <div class="my-4">
                <img class="rounded-lg w-75 mx-auto" src="<?php echo __ROOT__; ?>/public/img/home/capacitaciones.png">
                <h3><b>Capacitaciones</b></h3>
                <p class="text--gray">No te pierdas las capacitaciones de U.V. Márquez y Moncada para mantenerte al tanto de las actualizaciones de las NOM y más.</p>
                <a href="<?php echo __ROOT__; ?>landingCursos" class="btn btn--yellow px-5 py-3 m-2">
                    Conoce más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>