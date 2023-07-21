<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">
    <section class="hero--bg">
        <div class="container grid--2cols gap-8 px-4 py-5 align-items-center justify-items--center">
            <div>
                <h2 class="text-white text--xl mb-4">
                    Nom de <br>
                    <span class="text--yellow">seguridad</span>
                </h2>
                <a href="<?php echo __ROOT__; ?>normas" class="btn btn--transparent px-4 py-3 m-2">
                    Conocer más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <div class="text-center my-lg-5">
                <img class="rounded-lg w-100" src="<?php echo __ROOT__; ?>/public/img/landing/nomHero.png">
            </div>
        </div>
    </section>

    <section class="container grid--2cols align-items-center py-4">
        <div class="p-4 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/landing/nomReduce.png" class="w-75">
        </div>
        <div class="text--darkBlue p-2 p-lg-5">
            <h3 class="text--xl">Reduce el tiempo de la certificación de tus productos</h3>
            <p>
                ¿Cansado de perder tiempo en los trámites de certificación de normas? ¿Te preocupa garantizar el cumplimiento de las NOM?
            </p>
            <p>
                Deseas optimizar tiempo, garantizar la seguridad de tus productos y reducir recursos,|permítenos ser tu aliado en el camino hacia el cumplimiento de las NOM
            </p>
        </div>
    </section>
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