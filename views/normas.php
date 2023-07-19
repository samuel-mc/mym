<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">

    <section class="container p-4 bg--mediumBlue">
        <header class="text-center text--white mb-5 w--50 mx-auto">
            <h2 class="fw-bold mb-4">Requisitos</h2>
            <p class="text--md">
                Los documentos solicitados para el proceso de certificación son los siguientes
            </p>
        </header>

        <body>
            <div class="grid--3cols p-4">
                <div class="card normas__card p-3">
                    <div class="">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/muestra.png" class="mb-3">
                        <h4 class="text--darkBlue">Muestra física</h4>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/diagrama.png" class="mb-3">
                        <h4 class="text--darkBlue">Diagrama eléctrico</h4>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/manual.png" class="mb-3">
                        <h4 class="text--darkBlue">Manual o instructivo en español</h4>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/contrato.png" class="mb-3">
                        <h4 class="text--darkBlue">Contrato con OC</h4>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/reglamento.png" class="mb-3">
                        <h4 class="text--darkBlue">Reglamento de OC</h4>
                    </div>
                </div>
                <div class="card normas__card p-3">
                    <div class="">
                        <img src="<?php echo __ROOT__; ?>/public/img/normas/documentos.png" class="mb-3">
                        <h4 class="text--darkBlue">Documentos legales de la empresa importadora</h4>
                    </div>
                </div>
            </div>
        </body>
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