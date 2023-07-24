<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">
    <section id="detalleContacto" class="text-center p-4 bg--mediumBlue text-white">
        <h2 class="text-white my-4">Detalle de contacto</h2>
        <div class="grid--3cols gap-8">
            <div>
                <h6>Unidad de Inspección</h6>
                <div>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/phone.png">
                    <spam>55 2603 3114</spam>
                </div>
                <div>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/phone.png">
                    <spam>55 1019 3114</spam>
                </div>
                <div>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/email.png">
                    <spam class="long--text">administracionae@marquezymoncada.com</spam>
                </div>
            </div>
            <div>
                <h6>Organismo de Certificación de Productos</h6>
                <div>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/phone.png">
                    <spam>55 1018 6129</spam>
                </div>
                <div>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/email.png">
                    <spam>gerencialr@marquezymoncada.com</spam>
                </div>
            </div>
            <div>
                <h6>Diseño y colocación de etiqueta</h6>
                <div>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/phone.png">
                    <spam>55 5008 7598</spam>
                </div>
                <div>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/email.png">
                    <spam>logisearch2018@gmail.com</spam>
                </div>
            </div>
        </div>
    </section>
    <section id="ponteContacto" class="container">
        <div class="grid--2cols gap-8 py-4">
            <div>
                <div>
                    <h2 class="my-4 text--darkBlue font-weight-bold">Ponte en contacto</h2>
                    <p class="text--gray">Ponte en contacto con nosotros para obtener mas información o agendar una reunión y descubrir como nuestro servicio beneficia a tu empresa</p>
                </div>
                <?php include 'components/formulario.php'; ?>
            </div>
            <div class="py-5">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3758.931064922731!2d-99.01348778509089!3d19.587453786796555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDM1JzE0LjgiTiA5OcKwMDAnNDAuNyJX!5e0!3m2!1sen!2smx!4v1690241818000!5m2!1sen!2smx" style="border:0; height:320px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
                    <!-- <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/contacto/mapa.png"> -->
                    <spam class="text--gray">Calle José Maria Morelos y Pavón, Mz 56 Lt 9 Casa 9 A, Las Américas, Ecatepec de Morelos, Edo. de México.</spam>
                </div>
                <div>
                    <h2 class="text--darkBlue my-4 font-weight-bold">Horario de atención</h2>
                    <p class="text--gray">Lunes a Viernes de 9:00 a 18:00</p>
                </div>
            </div>
        </div>
        <section>

            <section id="bannerConoce" class="text-center p-4">
                <h2 class="text--darkBlue my-4 font-weight-bold">Conoce nuestros productos de importación</h2>
                <a href="#" class="btn btn--yellow px-5 py-3 m-2 fw-bold">
                    Ver más <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
                <section>
</main>

<?php include 'partials/footer.php'; ?>