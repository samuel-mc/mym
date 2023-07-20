<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="">
    <section id="ServicioUnidadInspeccion" class="container my-4">
        <div class="text-center w--50 mb-5 mx-auto">
            <h2 class="text--darkBlue text--xl fw-bold mb-3">Servicio unidad de inspección</h2>
            <p class="text--gray">
                Se inspecciona la conformidad de los productos mediante análisis documental de empaques, etiquetas, garantías e instructivos, en cumplimiento de las Normas Oficiales Mexicanas de información comercial aplicables.
            </p>
        </div>
        <div class="grid--2cols gap-2">
            <div class="w-100">
                <div class="w-100 text-center">
                    <img class="rounded-lg w-75 mx-auto" src="<?php echo __ROOT__; ?>/public/img/servicio/dictamen.png">
                </div>
                <h3 class="my-3"><b>Dictamen de cumplimiento</b></h3>
                <p class="text--gray">
                    Documento que se emite a los importadores como resultado de la evaluación de la conformidad efectuada durante la visita de verificación realizada en sitio, en el que se evidencia el cumplimiento, no cumplimiento o no sujeto al cumplimiento de los requisitos establecidos en la NOM.
                </p>
            </div>
            <div class="w-100">
                <div class="w-100 text-center">
                    <img class="rounded-lg w-75 mx-auto" src="<?php echo __ROOT__; ?>/public/img/servicio/constancia.png">
                </div>
                <h3 class="my-3"><b>Constancia de conformidad</b></h3>
                <p class="text--gray">
                    Documento que se emite a los productores, importadores, comercializadores o prestadores de servicios como resultado de la evaluación de la conformidad realizada a una etiqueta en el que se evidencia el cumplimiento, no cumplimiento o no sujeto al cumplimiento de los requisitos establecidos en la NOM
                </p>
            </div>
        </div>
    </section>
    <section id="procesosDiagramas" class="container my-4">
        <div class="grid--2cols">
            <div class="row row-cols-1 px-4">
                <h3 class="font-weight-bold">Procesos</h3>
                <div>
                    <img class="rounded-lg img-fluid" src="<?php echo __ROOT__; ?>/public/img/servicio/diagrama.png">
                </div>
                <div>
                    <a href="<?php echo __ROOT__; ?>solicitud" class="btn btn--yellow px-5 py-3 m-2">
                        Iniciar solicitud <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                </div>
            </div>
            <div class="px-4">
                <h3 class="font-weight-bold">Procesos</h3>
                <div>
                    <img class="rounded-lg img-fluid" src="<?php echo __ROOT__; ?>/public/img/servicio/diagrama2.png">
                </div>
                <div>
                    <a href="<?php echo __ROOT__; ?>solicitud" class="btn btn--yellow px-5 py-3 m-2">
                        Iniciar solicitud <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="container-fluid py-4 bg--mediumBlue">
        <div class="container">
            <header class="text-center text--white mb-5 w--50 mx-auto">
                <h2 class="fw-bold mb-4">Normas Acreditadas</h2>
                <p class="text--sm">
                    At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.
                </p>
            </header>
            <?php include 'components/cardsInspeccion.php'; ?>
            
            <footer class="text-center m-4">
                <div class="row justify-content-center">
                    <a href="<?php echo __ROOT__; ?>landingNom" class="btn btn--yellow px-5 py-3 m-2">
                        Consulta catálogo de NOMs y NMX <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                    <a href="<?php echo __ROOT__; ?>solicitud" class="btn btn--yellow px-5 py-3 m-2">
                        Iniciar solicitud <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                </div>
            </footer>
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>