<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">
    <section class="container text-center py-lg-4">
        <div class="w-50 mb-5 mx-auto">
            <h1 class="text--darkBlue font-weight-bold mb-3 long--text">Nuestras capacitaciones</h1>
            <p class="text--gray">Impulsa el cumplimiento normativo con nuestras capacitaciones especializadas de NOM</p>
        </div>
        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/imgCapacitacion.png">
    </section>

    <section id="ponteContacto" class="container">
        <div class="grid--2cols gap-8 py-4">
            <div>
                <div>
                    <h2 class="my-4 text--darkBlue font-weight-bold">Conviertete en un experto NOM´s, contáctanos"</h2>
                </div>
                <?php include 'components/formulario.php'; ?>
            </div>
            <div class="py-5 text--gray">
                <div>
                    <h2 class="text--darkBlue my-4 font-weight-bold">Capacitaciones</h2>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/phone.png">
                        <spam>55 1018 6129</spam>
                    </div>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/email.png">
                        <spam>gerencialr@marquezymoncada.com</spam>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>