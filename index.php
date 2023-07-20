<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/mym/");
#define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/mym/");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio'));
});
Flight::route('/servicio', function () {
    Flight::render('servicio.php', array('title' => 'Unidad de inspección'));
});
Flight::route('/normas', function () {
    Flight::render('normas.php', array('title' => 'Normas de seguridad'));
});
Flight::route('/solicitud', function () {
    Flight::render('solicitud.php', array('title' => 'Solicitud'));
});
Flight::route('/acerca', function () {
    Flight::render('acerca.php', array('title' => 'Acerca de'));
});
Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto'));
});
Flight::route('/preguntas', function () {
    Flight::render('preguntas.php', array('title' => 'Preguntas frecuentes'));
});
Flight::route('/gracias', function () {
    Flight::render('gracias.php', array('title' => 'Gracias'));
});
Flight::route('/landingDictamen', function () {
    Flight::render('landingDictamen.php', array('title' => 'Unidad de Inspección'));
});
Flight::route('/landingNom', function () {
    Flight::render('landingNom.php', array('title' => 'NOM de seguridad'));
});
Flight::route('/landingEtiqueta', function () {
    Flight::render('landingEtiqueta.php', array('title' => 'Etiquetado'));
});
Flight::route('/landingCursos', function () {
    Flight::render('landingCursos.php', array('title' => 'Capacitaciones'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php', array('title' => '404'));
});

Flight::start();
