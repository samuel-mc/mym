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
    <section class="container grid--2cols align-items-center py-4">
        <div class="p-4 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/home/libera.png" class="w-75">
        </div>
        <div class="text--darkBlue p-5">
            <h3>¡Libera tu mercancía de aduana en 24 horas o menos!</h3>
            <p>
                Ahorra tiempo y recursos en tus operaciones comerciales y dile adiós a las multas, sanciones, almacenajes y demoras
            </p>
        </div>
    </section>
    <section class="container py-4 bg--mediumBlue">
        <header class="text-center text--white mb-5 w--50 mx-auto">
            <h2 class="fw-bold mb-4">Unidad de inspección</h2>
            <p class="text--md">
                Normas de información comercial
            </p>
            <p class="text--sm">
                Determinan la información comercial y requisitos que deben cumplir las etiquetas, envases, embalajes para dar información al consumidor
            </p>
        </header>
        <body>
        </body>
        <footer class="text-center m-4">
            <div class="row justify-content-center">
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Cononce más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Solicitar servicio <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <div class="row justify-content-center">
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Consulta catálogo de NOMs y NMX <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
        </footer>

    </section>
    <section class="container py-4">
        <header class="text-center mb-5 w--50 mx-auto">
            <h2 class="text--darkBlue fw-bold mb-2">Normas de seguridad</h2>
            <p class="text--sm text--gray">
                Son regulaciones técnicas que establecen los requisitos mínimos para garantizar la seguridad y calidad de los productos y servicios en México.
            </p>
        </header>

        <body>
            <div class="grid--4cols">
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon1.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-001-SCFI-2018</h4>
                        <p class="text--gray text-md">Aparatos electrónicos</p>
                    </div>
                    <div class="card__content d-flex align-items-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Aparatos electrónicos-requisitos de seguridad y métodos de prueba
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon2.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-003-SCFI-2014</h4>
                        <p class="text--gray text-md">Productos eléctricos</p>
                    </div>
                    <div class="card__content d-flex align-items-center text-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Productos eléctricos-Especificaciones de seguridad
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon3.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-016-SCFI-1993</h4>
                        <p class="text--gray text-md">Aparatos de oficina</p>
                    </div>
                    <div class="card__content d-flex align-items-center text-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Aparatos electrónicos de uso en oficina y alimentados por diferentes fuentes de energía eléctrica
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon4.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-019-SCFI-1998</h4>
                        <p class="text--gray text-md">Procesamiento de datos</p>
                    </div>
                    <div class="card__content d-flex align-items-center text-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Seguridad de equipo de procesamiento de datos (Computo)
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid--3cols">
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon5.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-208-SCFI-2016</h4>
                        <p class="text--gray text-md">Radiocomunicación</p>
                    </div>
                    <div class="card__content d-flex align-items-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Sistemas de radiocomunicación que emplean la técnica de espectro disperso-Equipos de radiocomunicación por salto de frecuencia y por modulación digital (WIFI- Bluetooth)
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon6.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-030-ENER-2016</h4>
                        <p class="text--gray text-md">Eficiencia luminosa LED</p>
                    </div>
                    <div class="card__content d-flex align-items-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Eficacia luminosa de lámparas de diodos emisores de luz (led) integradas para iluminación general
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon7.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-031-ENER-2019</h4>
                        <p class="text--gray text-md">LED vialidades y exteriores</p>
                    </div>
                    <div class="card__content d-flex align-items-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Eficiencia energética para luminarios con led para iluminación de vialidades y áreas exteriores públicas
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon8.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-029-ENER-2017</h4>
                        <p class="text--gray text-md">Luminarios</p>
                    </div>
                    <div class="card__content d-flex align-items-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Eficiencia energética de fuentes de alimentación externa (Luminarios)
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon9.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-064-SCFI-2000</h4>
                        <p class="text--gray text-md">Eléctricos-luminarios</p>
                    </div>
                    <div class="card__content d-flex align-items-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Productos eléctricos-Luminarios para uso en interiores y exteriores
                        </p>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="card__front">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/icon10.png" class="mb-3">
                        <h4 class="text--darkBlue">NOM-186-SSA1/SCFI-2013</h4>
                        <p class="text--gray text-md">Chocolate</p>
                    </div>
                    <div class="card__content d-flex align-items-center">
                        <p class="card__title"></p>
                        <p class="card__description">
                            Cacao, chocolate y productos similares, y derivados del cacao. Especificaciones sanitarias
                        </p>
                    </div>
                </div>
            </div>
        </body>
        <footer class="text-center m-4">
            <div class="row justify-content-center">
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Cononce más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Solicitar servicio <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <div class="row justify-content-center">
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Consulta catálogo de NOMs y NMX <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
        </footer>

    </section>
    <section id="OtrosServiciosHome" class="container my-4">
        <div class="text-center font-bold">
            <h2 class="text--darkBlue fw-bold">Otros Servicios</h2>
            <p class="text--gray">
                Ampliamos nuestros servicios adicionales integrados a tus operaciones comerciales con el objetivo de optimizar la eficiencia y maximizar la utilización de recursos, lo que resulta en una reducción significativa de tiempos y costos
            </p>
        </div>
        <div class="grid--2cols text-center">
            <div class="my-4">
                <img class="rounded-lg w-50" src="<?php echo __ROOT__; ?>/public/img/home/etiquetado.png">
                <h3><b>Etiquetado</b></h3>
                <p class="text--gray">Diseño y colocación de etiquetas adheribles y textiles.</p>
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Cononce más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <div class="my-4">
                <img class="rounded-lg w-50" src="<?php echo __ROOT__; ?>/public/img/home/capacitaciones.png">
                <h3><b>Capacitaciones</b></h3>
                <p class="text--gray">No te pierdas las capacitaciones de U.V. Márquez y Moncada para mantenerte al tanto de las actualizaciones de las NOM y más.</p>
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Cononce más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
        </div>
    </section>
    <section id="bannerContactanos" style="background-color: var(--medium-blue);" class="text-center p-4">
        <h2 class="text-white my-4">¡No lo pienses, contáctanos!</h2>
        <a href="#" class="btn btn--yellow px-5 py-3 m-2 fw-bold">
            Empezar <i class="fa-solid fa-arrow-right mx-1"></i>
        </a>
        <section>
</main>
<?php include 'partials/footer.php'; ?>