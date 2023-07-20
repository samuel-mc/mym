<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">


    <section id="ponteContacto" class="container">
        <div class="grid--2cols gap-8 py-4">
            <div>
                <div>
                    <h2 class="my-4 text--darkBlue font-weight-bold">Inicia tu proceso de certificación contestando el siguiente formulario</h2>
                </div>
                <?php include 'components/formulario.php'; ?>
            </div>
            <div class="py-5 text--gray">
                <div>
                    <h2 class="text--darkBlue my-4 font-weight-bold">Organismo de Certificación de Productos</h2>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/phone.png">
                        <spam>55 1018 6129</spam>
                    </div>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/email.png">
                        <spam>55 1018 6129</spam>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>