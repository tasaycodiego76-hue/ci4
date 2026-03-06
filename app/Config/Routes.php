<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');
$routes->get('/senati', 'Home::index');


$routes->get('/programador', 'Carrera::showIngenieria');
$routes->get('/coder', 'Carrera::showIngenieria');

$routes->get('/creativo', 'Carrera::showDesign');
$routes->get('/marketing', 'Carrera::showDesign');

//dashboard

//Nuevas rutas para navegar desde DASHBOARD
$routes->get(from: '/clientes', to: 'Cliente::index');
$routes->get(from: '/proveedores', to: 'Proveedor::index');
$routes->get(from: '/productos', to: 'Producto::index');
//reporte 
$routes->get(from: '/diario',        to: 'Reporte::diario');
$routes->get(from: '/semanal',       to: 'Reporte::semanal');
$routes->get(from: '/mensual',       to: 'Reporte::mensual');
$routes->get(from: '/personalizado', to: 'Reporte::personalizado');