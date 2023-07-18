<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="container grid--2cols">
        <div style="background-color: var(--medium-blue);">
            <h2 class="text-white">
                U.V. Márquez y Moncada, Normatividad Confiable, <br>
                <span class="font-weight-light" style="color: var(--yellow);">Unidad de Inspección</span>
            </h2>
        </div>
        <div id="carouselHome" class="splide w-100" aria-label="Splide Basic HTML Example">
            <div class="splide__track" class="w-100">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/carousel1.png" class="w-100">
                    </li>
                    <li class="splide__slide">
                        <div>
                            <h3 class="text--darkBlue">Acreditación y aprobación</h3>
                            <p class="text--darkBlue text--md">U.V Marquez y Moncada está <span class="text--yellow">acreditada y aprobada</span> por la ema, la DGN respectivamente.</p>
                        </div>
                        <img src="<?php echo __ROOT__; ?>/public/img/home/carouselBg.png" class="w-100">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/nuestrosPr3.png" class="w-full object-cover">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/nuestrosPr4.png" class="w-full object-cover">
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/nuestrosPr5.png" class="w-full object-cover">
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>