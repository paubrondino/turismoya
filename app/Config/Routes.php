<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/registro', 'usuario::registro_view');

 $routes->get('/', 'Home::index');

// Registro de usuario
$routes->get('registro', 'usuario::registro_view');         // Mostrar formulario
$routes->post('registro/guardar', 'usuario::registro'); // Guardar datos en BD
$routes->get('/login', 'usuario::registrar'); // Mostrar formulario de login
$routes->post('/login/iniciar', 'usuario::iniciarSesion'); 
$routes->get('principal', 'pagprincipal::index');
$routes->get('/registro', 'Registro::index');
$routes->get('/prueba', 'Prueba::index');
$routes->post('/prueba', 'Prueba::index');
$routes->get('/login', 'login::logout');







