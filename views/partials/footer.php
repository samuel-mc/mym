<footer class="container-xl py-2">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
        <div class="">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" alt="logo de la empresa">
        </div>
        <div class="navbar__list">
            <ul class="flex-row flex-wrap align-items-center">
                <li class="my-3 mx-3"><a class="a--darkBlue" href="<?php echo __ROOT__; ?>">Inicio</a></li>
                <li class="my-3 mx-3"><a class="a--darkBlue" href="<?php echo __ROOT__; ?>servicios">Servicios</a></li>
                <li class="my-3 mx-3"><a class="a--darkBlue" href="<?php echo __ROOT__; ?>servicios">Solicitud</a></li>
                <li class="my-3 mx-3"><a class="a--darkBlue" href="<?php echo __ROOT__; ?>servicios">Acerca</a></li>
                <li class="my-3 mx-3"><a class="a--darkBlue" href="<?php echo __ROOT__; ?>#contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="navbar__list">
            <ul class="flex">
                <li class="m-3"><a target="_blank" class="a--darkBlue" href="https://www.facebook.com/EnCargoOLK?mibextid=LQQJ4d"><i class="fa-brands fa-square-facebook fa-2xl"></i></i></a></li>
                <li class="m-3"><a target="_blank" class="a--darkBlue" href="https://instagram.com/encargo_olkb?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram fa-2xl"></i></a></li>
                <li class="m-3"><a target="_blank" class="a--darkBlue" href="https://www.linkedin.com/in/encargo-olk-b65937249"><i class="fa-brands fa-linkedin fa-2xl"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
<script src="<?php echo __ROOT__; ?>/public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="<?php echo __ROOT__; ?>/public/js/carousel/dist/js/splide.min.js"></script>
<script>
    const carouselHome = new Splide('#carouselHome', {
        //autoplay: true,
        type: 'loop',
        gap: '1.6rem',
        perPage: 1,
        perMove: 1,
        isNavigation: false,
        breakpoints: {
            1024: {
                perPage: 1,
                gap: '1rem',
            },
            480: {
                perPage: 1,
                gap: '1rem',
            },
        },
        autoScroll: {
            speed: 2,
        },
    });

    carouselHome.mount();
</script>
</html>