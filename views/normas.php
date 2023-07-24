<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">
    <section class="container grid--2cols align-items-center py-4">
        <div class="p-4 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/normas/heroImg.png" class="w-75">
        </div>
        <div class="text--darkBlue p-2 p-lg-5">
            <h3 class="text--xl">Organismo de Certificación de Productos (OCP)</h3>
            <p>
                Efectuamos sinergia con laboratorios de pruebas y organismos de certificación de productos para certificar productos eléctricos y electrónicos
            </p>
        </div>
    </section>

    <section class="container-fluid bg--mediumBlue py-5">
        <div class="container mx-auto">
            <header class="text-center mb-5 w--50 mx-auto text--white">
                <h2 class=" fw-bold mb-3 text--yellow">Normas de seguridad</h2>
                <p class="text--sm">
                    Son regulaciones técnicas que establecen los requisitos mínimos para garantizar la seguridad y calidad de los productos y servicios en México.
                </p>
            </header>

            <?php include 'components/cardsNormas.php'; ?>

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

    <section class="container-fluid p-4 bg--mediumBlue">
        <section class="container">
            <header class="text-left text--white mb-5">
                <h2 class="fw-bold mb-4">Requisitos</h2>
                <p class="text--md">
                    Los documentos solicitados para el proceso de certificación son los siguientes
                </p>
            </header>
            <body>
                <div class="grid--3cols p-4">
                    <div class="card normas__card p-4 align-items-start">
                        <div class="text--start">
                            <img src="<?php echo __ROOT__; ?>/public/img/normas/muestra.png" class="mb-3">
                            <h4 class="text--darkBlue">Muestra física</h4>
                        </div>
                    </div>
                    <div class="card normas__card p-4 align-items-start">
                        <div class="text--start">
                            <img src="<?php echo __ROOT__; ?>/public/img/normas/diagrama.png" class="mb-3">
                            <h4 class="text--darkBlue">Diagrama eléctrico</h4>
                        </div>
                    </div>
                    <div class="card normas__card p-4 align-items-start">
                        <div class="text--start">
                            <img src="<?php echo __ROOT__; ?>/public/img/normas/manual.png" class="mb-3">
                            <h4 class="text--darkBlue">Manual o instructivo en español</h4>
                        </div>
                    </div>
                    <div class="card normas__card p-4 align-items-start">
                        <div class="text--start">
                            <img src="<?php echo __ROOT__; ?>/public/img/normas/contrato.png" class="mb-3">
                            <h4 class="text--darkBlue">Contrato con OC</h4>
                        </div>
                    </div>
                    <div class="card normas__card p-4 align-items-start">
                        <div class="text--start">
                            <img src="<?php echo __ROOT__; ?>/public/img/normas/reglamento.png" class="mb-3">
                            <h4 class="text--darkBlue">Reglamento de OC</h4>
                        </div>
                    </div>
                    <div class="card normas__card p-4 align-items-start">
                        <div class="text--start">
                            <img src="<?php echo __ROOT__; ?>/public/img/normas/documentos.png" class="mb-3">
                            <h4 class="text--darkBlue">Documentos legales de la empresa importadora</h4>
                        </div>
                    </div>
                </div>
            </body>
        </section>
    </section>
    <section id="procesoCertificacion" class="container my-4">
        <div class="text-center font-bold">
            <h2 class="text--darkBlue font-weight-bold">Nuestro proceso de certificación</h2>
        </div>
        <img class="rounded-lg" src="<?php echo __ROOT__; ?>/public/img/normas/procesoCertificacion.png">
        <div class="grid--2cols text-center">
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>