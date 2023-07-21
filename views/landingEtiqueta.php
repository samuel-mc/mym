<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">

    <section class="container py-5">
        <div class="text-center w--50 mx-auto">
            <h2 class="text--xl text--darkBlue fw-bold">Optimiza tus etiquetas de información comercial</h2>
        </div>
    </section>
    <section class="container grid--2cols align-items-center">
        <div class="p-1 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/landing/etiqueta1.png" class="w-75">
        </div>
        <div class="text--darkBlue p-1 p-lg-5">
            <p class="text--md text--darkBlue">
                Contamos con servicios adicionales como el diseño y colocación de etiqueta de información comercial clara en tu mercancía, con el propósito de reducir recursos en tus operaciones comerciales.
            </p>
        </div>
    </section>
    <section class="container grid--2cols align-items-center">
        <div class="text--darkBlue p-1 p-lg-5">
            <h3 class="mb-4 text-center">Diseño de etiqueta</h3>
            <div class="d-flex justify-content-center">
                <div class="mx-4 d-flex flex-column align-items-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/landing/etiquetaText.png">
                    <p class="text--gray my-2">Adherible</p>
                </div>
                <div class="mx-4 d-flex flex-column align-items-center">
                    <img src="<?php echo __ROOT__; ?>/public/img/landing/etiquetaText.png">
                    <p class="text--gray my-2">Textil</p>
                </div>
            </div>
        </div>
        <div class="p-1 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/landing/etiqueta2.png" class="w-75">
        </div>
    </section>
    <section class="container grid--2cols align-items-center">
        <div class="p-1 text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/landing/etiqueta3.png" class="w-75">
        </div>
        <div class="text--darkBlue p-1 p-lg-5">
            <h3 class="mb-4">Colocación de etiqueta</h3>
            <p class="text--md text--darkBlue">
                Nuestro equipo experto se encarga de agilizar el proceso de etiquetado de tu mercancía, asegurando eficiencia y precisión.
            </p>
        </div>
    </section>
    <section id="ponteContacto" class="container">
        <div class="grid--2cols gap-8 py-4">
            <div>
                <div>
                    <h2 class="my-4 text--darkBlue font-weight-bold">Ponte en contacto</h2>
                </div>
                <?php include 'components/formulario.php'; ?>
            </div>
            <div class="py-5 text--gray">
                <div>
                    <h2 class="text--darkBlue my-4 font-weight-bold">Diseño y colocación de etiqueta</h2>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/phone.png">
                        <spam>55 5008 7598</spam>
                    </div>
                    <div>
                        <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/landing/email.png">
                        <spam>logisearch2018@gmail.com</spam>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>