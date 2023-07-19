<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/mym/");
define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/mym/");


Flight::route('/', function () {
    Flight::render('index.php');
});
Flight::route('/servicio', function () {
    Flight::render('servicio.php');
});
Flight::route('/normas', function () {
    Flight::render('normas.php');
});
Flight::route('/solicitud', function () {
    Flight::render('solicitud.php');
});
Flight::route('/acerca', function () {
    Flight::render('acerca.php');
});
Flight::route('/contacto', function () {
    Flight::render('contacto.php');
});
Flight::route('/preguntas', function () {
    Flight::render('preguntas.php');
});
Flight::route('/gracias', function () {
    Flight::render('gracias.php');
});
Flight::route('/landingDictamen', function () {
    Flight::render('landingDictamen.php');
});
Flight::route('/landingNom', function () {
    Flight::render('landingNom.php');
});
Flight::route('/landingEtiqueta', function () {
    Flight::render('landingEtiqueta.php');
});
Flight::route('/landingCursos', function () {
    Flight::render('landingCursos.php');
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
