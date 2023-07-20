<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main class="image--bg">

    <section id="404" class="container py-4 text--gray text-center">
        <div class="my-4">
            <h2 class="text--darkBlue font-weight-bold">Página no encontrada</h2>
            <p class="text--gray">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        </div>
        <div class="my-4">
            <img class="rounded-lg img-fluid" src="<?php echo __ROOT__; ?>/public/img/general/404.png">
        </div>
        <div class="my-4">
            <h2 class="text--darkBlue font-weight-bold">Página no encontrada</h2>
            <a href="<?php echo __ROOT__; ?>" class="btn btn--yellow px-5 py-3 m-2">
                    Regresar al inicio <i class="fa-solid fa-arrow-right mx-1"></i>
            </a>
        </div>
    </section>
    <?php include 'components/bannerContacto.php'; ?>
</main>

<?php include 'partials/footer.php'; ?>