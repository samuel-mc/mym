<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image">
    <section class="container-fluid bg-white">
        <div class="container grid--2cols align-items-center py-4">
            <div class="p-4 text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/acerca/heroImg.png" class="w-75">
            </div>
            <div class="text--darkBlue p-2 p-lg-5">
                <h3 class="text--xl">U.V. Márquez y Moncada</h3>
                <p>
                    La experiencia en el medio nos respalda, constituidos en el año 2003 como Unidad de Verificación (UVA), ahora Unidad de Inspección.Aprobados por la Dirección General de Normas (DGN) y acreditados por la Entidad de Acreditación (ema) para efectuar actos de inspección en Normas Oficiales Mexicanas de información comercial.
                </p>
            </div>
        </div>
    </section>
    <section id="mision_vision" class="container">
        <div class="grid--2cols text-center py-4 gap-8">
            <div class="bg--mediumBlue text--white rounded-lg p-4">
                <img class="rounded-lg img-fluid" src="<?php echo __ROOT__; ?>/public/img/acerca/mision.png">
                <h2 class="my-4">Misión</h2>
                <p>Coadyuvar con importadores y fabricantes nacionales, a dar cumplimiento a las Normas Oficiales Mexicanas de información comercial obligatoria, contribuyendo a fortalecer la normatividad en México.</p>
            </div>
            <div class="bg--mediumBlue text--white rounded-lg p-4">
                <img class="rounded-lg img-fluid" src="<?php echo __ROOT__; ?>/public/img/acerca/vision.png">
                <h2 class="my-4">Visión</h2>
                <p>A través de servicios de calidad y compromiso del personal de UVMM, con el reconocimiento de las autoridades que nos acreditan y aprueban, y la satisfacción de los clientes por los servicios otorgados.</p>
            </div>
        </div>
    </section>

    <section id="beneficiosValor" class="container my-4">
        <div class="text-center">
            <h2 class="text--darkBlue font-weight-bold">Beneficios y valor agregado</h2>
            <p class="text--gray">
                Descubre nuestras ventajas que ayudaran a fortalecer las operaciones comerciales y a reducir recursos de tu empresa.
            </p>
        </div>
        <div class="grid--2cols">
            <ul class="m-4 list-unstyled gap-2">
                <li>
                    <img class="rounded-lg img-fluid pr-4" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Eficiencia operativa</spam>
                </li>
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Optimización de costos y tiempo en tus operaciones</spam>
                </li>
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Garantizar el cumplimiento normativo</spam>
                </li>
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Cobertura nacional en las inspecciones</spam>
                </li>
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Capacitación constante de los inspectores</spam>
                </li>
            </ul>
            <ul class="m-4 list-unstyled gap-2">
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Eficiencia operativa</spam>
                </li>
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Amplia experiencia en el mercado</spam>
                </li>
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Adaptabilidad a las necesidades de los clientes</spam>
                </li>
                <li>
                    <img class="rounded-lg img-fluid pr-2" src="<?php echo __ROOT__; ?>/public/img/acerca/paloma.png">
                    <spam>Atención y orientación personalizada</spam>
                </li>
            </ul>
        </div>
    </section>

    <section id="nuestrosClientes" class="container my-4">
        <div class="text-center">
            <h2 class="text--darkBlue font-weight-bold">Nuestros Clientes</h2>
            <p class="text--gray">
                Contamos con la preferencia de clientes sólidos, gracias a su confianza y hemos crecido en este periodo gracias a nuestra experiencia en el medio.
            </p>
        </div>
        <div class="grid--4cols gap-2 text-center">
            <div class="m-4">
                <img class="rounded-lg py-2" src="<?php echo __ROOT__; ?>/public/img/acerca/importadores.png">
                <h3 class="text--darkBlue font-weight-bold">Importadores</h3>
            </div>
            <div class="m-4">
                <img class="rounded-lg py-2" src="<?php echo __ROOT__; ?>/public/img/acerca/agentes.png">
                <h3 class="text--darkBlue font-weight-bold">Agentes aduanales</h3>
            </div>
            <div class="m-4">
                <img class="rounded-lg py-2" src="<?php echo __ROOT__; ?>/public/img/acerca/comercializadoras.png">
                <h3 class="text--darkBlue font-weight-bold">Comercializadoras</h3>
            </div>
            <div class="m-4">
                <img class="rounded-lg py-2" src="<?php echo __ROOT__; ?>/public/img/acerca/fabricantes.png">
                <h3 class="text--darkBlue font-weight-bold">Fabricantes</h3>
            </div>
        </div>
    </section>

    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>