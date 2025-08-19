<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/registro', 'usuario::registro_view');

// $routes->get('/', 'Home::index');

// Registro de usuario
$routes->get('registro', 'usuario::registro_view');         // Mostrar formulario
$routes->post('registro/guardar', 'usuario::registro'); // Guardar datos en BD
$routes->get('/login', 'usuario::registrar'); // Mostrar formulario de login
$routes->post('/login/iniciar', 'usuario::iniciarSesion'); // iniciar sesión
// $routes->get('principal', 'pagprincipal::index');
$routes->setDefaultController('Home');
$routes->get('principal', 'PagPrincipal::index');

$routes->get('/registro', 'Registro::index');
$routes->get('pagina', 'Pagina::index');



// Tu botón de login redireccionará a /principal




