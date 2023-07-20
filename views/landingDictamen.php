<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">

    <section class="hero--bg">
        <div class="container grid--2cols gap-8 px-4 py-5 align-items-center">
            <div>
                <h2 class="text-white text--xl mb-4">
                    Unidad de <br> 
                    <span class="text--yellow">Inspección</span>
                </h2>
                <a href="<?php echo __ROOT__; ?>servicio" class="btn btn--yellow px-4 py-3 m-2">
                    Empezar solicitud <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
                <a href="#" class="btn btn--transparent px-4 py-3 m-2">
                    Conocer más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <div class="text-center my-lg-5">
                <img class="rounded-lg w-75" src="<?php echo __ROOT__; ?>/public/img/landing/dictamenHero.png">
            </div>
        </div>
    </section>

    <section class="container grid--2cols align-items-center py-4">
        <div class="p-4 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/landing/dictamenLibera.png" class="w-75">
        </div>
        <div class="text--darkBlue p-2 p-lg-5">
            <h3 class="text--xl">¡Libera tu mercancía de aduana!</h3>
            <p>
                En U.V. Márquez y Moncada te ayudamos a dar cumplimiento a las NOM de información comercial evitando multas, sanciones, almacenajes y demoras.
            </p>
        </div>
    </section>

    <section id="ponteContacto" class="container">
        <div class="grid--2cols gap-8 py-4">
            <div>
                <div>
                    <h2 class="my-4 text--darkBlue font-weight-bold">Ponte en contacto</h2>
                    <p class="text--gray">
                        ¡Qué esperas! Ahorra tiempo y recursos en tus operaciones comerciales, contáctanos
                    </p>
                </div>
                <?php include 'components/formulario.php'; ?>
            </div>
            <div class="py-5 text--gray">
                <div>
                    <h2 class="text--darkBlue my-4 font-weight-bold">Unidad de Inspecciónn</h2>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/phone.png">
                        <spam>55 2603 3114</spam>
                    </div>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/phone.png">
                        <spam>55 1019 3114</spam>
                    </div>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/email.png">
                        <spam>administracionae@marquezymoncada.com</spam>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>