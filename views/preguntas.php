<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="bg--image2">
    <section id="beneficiosValor" class="container my-4">
        <div class="text-center">
            <h2 class="text--darkBlue font-weight-bold">Preguntas Frecuentes</h2>
            <p class="text--gray">
                ¿Tienes preguntas? Consulta nuestras preguntas frecuentes para obtener respuestas rápidas y claras sobre nuestros servicios.
            </p>
        </div>
        <div class="grid--2cols">
            <div class="p-4">
                <h2 class="text--darkBlue font-weight-bold">¿Tienes alguna duda?</h2>
                <p class="text--gray">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
                <div class="text-center">
                    <img class="rounded-lg img-fluid" src="<?php echo __ROOT__; ?>/public/img/general/preguntas.png">
                </div>
            </div>

            <div id="accordion" class="text--white">
                <div class="card">
                    <div class="card-header w-100 bg--mediumBlue" id="headingOne">
                        <div class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <spam>Qué documento avala el cumplimiento de la normatividad?</spam>
                            <i class="fa-solid fa-chevron-down float-right collapse" id="collapseOne"></i>
                            <i class="fa-solid fa-chevron-up float-right collapse show" id="collapseOne"></i>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show text--gray" aria-labelledby="headingOne">
                        <div class="card-body">
                            En caso de importación, dictamen de cumplimiento o negación de dictamen, en caso de evaluación de etiqueta, constancia de conformidad o negación de constancia.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header w-100 bg--mediumBlue" id="headingTwo">
                        <div class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <spam>¿Cuál es la diferencia entre constancia y dictamen?</spam>
                            <i class="fa-solid fa-chevron-down float-right collapse show" id="collapseTwo"></i>
                            <i class="fa-solid fa-chevron-up float-right collapse" id="collapseTwo"></i>
                        </div>
                    </div>

                    <div id="collapseTwo" class="collapse text--gray" aria-labelledby="headingTwo">
                        <div class="card-body">
                            Aunque ambos documentos dan cumplimento y validez a tu mercancía, la constancia se emite cuando el producto (etiqueta) se encuentra en cumplimiento con la NOM y el dictamen se emite una vez se acredite el cumplimiento en territorio mexicano.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header w-100 bg--mediumBlue" id="headingThree">
                        <div class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <spam>¿Cuál es el tiempo limite para poder etiquetar mi mercancía?</spam>
                            <i class="fa-solid fa-chevron-down float-right collapse show" id="collapseThree"></i>
                            <i class="fa-solid fa-chevron-up float-right collapse" id="collapseThree"></i>
                        </div>
                    </div>

                    <div id="collapseThree" class="collapse text--gray" aria-labelledby="headingThree">
                        <div class="card-body">
                            Una vez despachada la mercancía, cuenta con 30 días naturales para etiquetar y realizar la inspección.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header w-100 bg--mediumBlue" id="headingFour">
                        <div class="mb-0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <spam>¿Qué documentos me deben entregar durante el proceso de inspección?</spam>
                            <i class="fa-solid fa-chevron-down float-right collapse show" id="collapseFour"></i>
                            <i class="fa-solid fa-chevron-up float-right collapse" id="collapseFour"></i>
                        </div>
                    </div>

                    <div id="collapseFour" class="collapse text--gray" aria-labelledby="headingFour" ">
                        <div class="card-body">
                            Antes de iniciar la inspección usted debe recibir el oficio de comisión y al término de la misma usted debe recibir el acta detallada en la cual asentara el resultado de la inspección ya sea satisfactoria o no.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header w-100 bg--mediumBlue" id="headingFive">
                        <div class="mb-0" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <spam> ¿Qué debo hacer en caso de inmovilización del producto en punto de venta?</spam>
                            <i class="fa-solid fa-chevron-down float-right collapse show" id="collapseFive"></i>
                            <i class="fa-solid fa-chevron-up float-right collapse" id="collapseFive"></i>
                        </div>
                    </div>

                    <div id="collapseFive" class="collapse text--gray" aria-labelledby="headingFive" ">
                        <div class="card-body">
                            Debes acreditar la legal estancia de la mercancía en territorio nacional (factura/pedimento) y presentar etiqueta prototipo con cumplimiento de NOM
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header w-100 bg--mediumBlue" id="heading">
                        <div class="mb-0" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <spam>¿Para qué sirve la SSI (solicitud de servicio)?</spam>
                            <i class="fa-solid fa-chevron-down float-right collapse show" id="collapseSix"></i>
                            <i class="fa-solid fa-chevron-up float-right collapse" id="collapseSix"></i>
                        </div>
                    </div>

                    <div id="collapseSix" class="collapse text--gray" aria-labelledby="headingSix">
                        <div class="card-body">
                            La SSI es el documento que se valida ante el SAT para el despacho de la mercancía y es requerida por un AA.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header w-100 bg--mediumBlue" id="heading">
                        <div class="mb-0" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <spam>¿Cómo puedo saber si está validada la SSI para m realizar el despacho?</spam>
                            <i class="fa-solid fa-chevron-down float-right collapse show" id="collapseSeven"></i>
                            <i class="fa-solid fa-chevron-up float-right collapse" id="collapseSeven"></i>
                        </div>
                    </div>

                    <div id="collapseSeven" class="collapse text--gray" aria-labelledby="headingSeven">
                        <div class="card-body">
                            La UI notificara vía correo cuando ya se tenga el resultado de la validación.
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>


    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>