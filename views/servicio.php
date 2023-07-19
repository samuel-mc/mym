<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="">
    <section id="ServicioUnidadInspeccion" class="container my-4">
        <div class="text-center">
            <h2 class="text--darkBlue font-weight-bold">Servicio unidad de inspección</h2>
            <p class="text--gray">
                Se inspecciona la conformidad de los productos mediante análisis documental de empaques, etiquetas, garantías e instructivos, en cumplimiento de las Normas Oficiales Mexicanas de información comercial aplicables.
            </p>
        </div>
        <div class="grid--2cols">
            <div class="m-4">
                <img class="rounded-lg" src="<?php echo __ROOT__; ?>/public/img/servicio/dictamen.png">
                <h3><b>Dictamen de cumplimiento</b></h3>
                <p class="text--gray">
                    Documento que se emite a los importadores como resultado de la evaluación de la conformidad efectuada durante la visita de verificación realizada en sitio, en el que se evidencia el cumplimiento, no cumplimiento o no sujeto al cumplimiento de los requisitos establecidos en la NOM.
                </p>
            </div>
            <div class="m-4">
                <img class="rounded-lg" src="<?php echo __ROOT__; ?>/public/img/servicio/constancia.png">
                <h3><b>Constancia de conformidad</b></h3>
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
                    <a href="#" class="btn btn--yellow px-5 py-3 m-2">
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
                    <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                        Iniciar solicitud <i class="fa-solid fa-arrow-right mx-1"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>