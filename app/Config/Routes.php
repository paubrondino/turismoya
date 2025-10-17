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
$routes->get('/login', 'usuario::inicio'); // Mostrar formulario de login
$routes->post('/login/iniciar', 'usuario::iniciarSesion'); 
$routes->get('principal', 'pagprincipal::index');
$routes->get('/registro', 'Registro::index');
$routes->get('/prueba', 'Prueba::index');
$routes->post('/prueba', 'Prueba::index');
$routes->get('/logout', 'usuario::logout');
$routes->get('promociones', 'Promociones::index');
$routes->get('promociones/reservar/(:segment)', 'Promociones::reservar/$1');
$routes->get('reserva/(:segment)', 'Reserva::index/$1');
$routes->post('reserva/enviar', 'Reserva::enviar');
$routes->get('/perfil', 'usuario::mostrar');

$routes->get('usuario/perfil', 'usuario::perfil');
$routes->post('usuario/subir_imagen', 'Usuario::subir_imagen');
// Perfil del usuario
$routes->get('/usuario/perfil', 'Usuario::perfil');

// Vista de solicitud de operador
$routes->get('/usuario/solicitud', 'Solicitud::index');
$routes->get('usuario/solicitud', 'Solicitud::index');
$routes->get('usuario/solicitud', 'Solicitud::index');
$routes->get('prueba', 'index::prueba'); // ejemplo con Home.php como controlador
$routes->get('/api/actividades', 'ActividadController::getActividades'); // Todas las actividades
$routes->get('/api/actividad/(:num)', 'ActividadController::getActividad/$1'); // Una actividad por id


$routes->get('/', 'Prueba::index'); // Ruta principal, carga la página con todas las actividades
$routes->get('/prueba', 'Prueba::index'); // Otra forma de acceder al mismo controlador

$routes->get('actividad', 'Actividad::index');            // Formulario
$routes->post('actividad/guardar', 'Actividad::guardar'); // Guardar actividad
$routes->get('actividad/listar', 'Actividad::listar');    // Listar actividades


// Muestra el formulario (vista solicitud.php)
$routes->get('/solicitud', 'Operador::formulario');

// Procesa la solicitud (POST)
$routes->post('/operador/solicitar', 'Operador::solicitar');


$routes->get('/', 'Home::index');

// Registro
$routes->get('registro', 'Usuario::registro');
$routes->post('registro', 'Usuario::registro');

// Login
$routes->get('login', 'Usuario::inicio');
$routes->post('login', 'Usuario::iniciarSesion');

// Vista principal después del login
$routes->get('prueba', 'Prueba::index');




$routes->get('/', 'Actividad::prueba'); // Página principal lista de actividades
$routes->get('actividad/(:num)', 'Actividad::ver/$1'); // Detalle de actividad
$routes->post('actividad/guardar', 'Actividad::guardar');


$routes->get('solicitud', 'Solicitud::index2');
$routes->post('solicitud/enviar', 'Solicitud::enviar2');

$routes->get('actividades', 'ActividadController::index');
$routes->get('actividad_detalle/(:num)', 'ActividadController::detalle/$1');

$routes->post('/reservar', 'Reserva::mandar');




$routes->get('admin', 'Admin::index');
$routes->get('admin/aceptar/(:num)', 'Admin::aceptar/$1');
$routes->get('admin/rechazar/(:num)', 'Admin::rechazar/$1');


// buscar
$routes->get('actividades', 'ActividadController::index');
$routes->get('buscar-actividad', 'ActividadController::buscar');
$routes->get('actividad/(:num)', 'ActividadController::detalle/$1');
