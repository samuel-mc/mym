<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="">
    <section class="container">
        <div class="grid--2cols text-center py-4">
            <div class="bg--mediumBlue text--white rounded-lg p-2">
                <h2>Recuerda</h2>
                <p>Para el despacho aduanal necesitas:</p>
                <p class="text--sm">Contrato<br>
                    SSI (valido)<br>
                    Carta al administrador de aduana
                </p>
            </div>
            <div class="p-2">
                <h1 class="font-weight-bold text--darkBlue">Iniciar solicitud</h1>
                <p class="text--gray">Unidad de inspección</p>
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Requisitos <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
        </div>
        <div class="text-center py-4">
            <h1 class="font-weight-bold text--darkBlue">Descargar los siguientes documentos</h1>
            <div class="grid--3cols justify-items--center">
                <a href="#" class="btn btn--yellow px-5 py-3 w--fit">
                    Contrato <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
                <a href="#" class="btn btn--yellow px-5 py-3 w--fit">
                    SSI <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
                <a href="#" class="btn btn--yellow px-5 py-3 w--fit">
                    Contrato <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
        </div>
        <div class="text-center py-4">
            <h1 class="font-weight-bold text--darkBlue">Envianos los documentos al siguiente correo</h1>
            <div class="text-center mx-0 px-0 mx-lg-5 px-lg-5">
                <p class="bg--mediumBlue px-5 py-3 my-2 mx-0 w-full text--white rounded-lg long--text">
                    alejandraae@marquezymoncada.com
                </p>
            </div>
            <div>
                <a href="#" class="btn btn--yellow px-5 py-3 m-2">
                    Carta dirigida al administrador de la aduana <i class="fa-solid fa-arrow-right mx-1"></i>
                </a>
            </div>
            <h2 class="text--gray">(Enviar a tu agente aduanal)</h2>
            <video id="video" controls class="rounded-lg img-fluid">
                <source src="<?php echo __ROOT__; ?>/public/video/video.mp4" type="video/mp4">
            </video>
            <div class="text-center mx-2 px-2 mx-lg-5 px-lg-5">
                <h2 class="bg--mediumBlue px-lg-5 px-2 py-3 my-2 mx-lg-5  mx-2 text--white rounded-lg">
                ¡Tu validación lista en 24 horas o menos!
                </h2> 
            </div>
        </div>
    </section>

</main>

<?php include 'partials/footer.php'; ?>