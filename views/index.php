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
                        <img src="<?php echo __ROOT__; ?>/public/img/home/carousel1.png" class="w-100 h-100">
                    </li>
                    <li class="splide__slide position-relative">
                        <div class="position-absolute p-4 text-center">
                            <h3 class="text--mediumBlue mb-4">Acreditación y aprobación</h3>
                            <p class="text--mediumBlue text--md mb-2">U.V Marquez y Moncada está <span class="text--yellow">acreditada y aprobada</span> por la ema, la DGN respectivamente.</p>
                            <p class="text--mediumBlue text--md">Está información se puede verificar mediante el Diario Oficial de la Federación (DOF).</p>
                        </div>
                        <img src="<?php echo __ROOT__; ?>/public/img/home/carouselBg.png" class="w-100 h-100">
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

                </ul>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>