<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Home::index');
$routes->post('/login', 'Home::login');
$routes->get('/usuario', 'usuario::index');
$routes->post('/register', 'usuario::criausuario');
$routes->get('empresa', 'empresa::index');
$routes->get('/criar', 'criar::index');
$routes->get('/logout', 'logout::index');
$routes->post('/criar', 'criar::cadastrar');
$routes->get('/ver/(:num)', 'ver::index/$1');
$routes->post('/ver/(:num)','ver::buscar/$1');
$routes->post('/tables/atualizar/(:num)', 'atualizar::index');
$routes->get('/tables/atualizar/(:num)', 'atualizar::altera/$1');
$routes->get('/tables/remover/(:num)', 'remover::remove/$1');
$routes->get('/sbadm', 'sbadm::index');
$routes->get('/charts', 'sbadm::charts');
$routes->get('/tables', 'ver::index');
$routes->post('/tables', 'ver::buscar');
$routes->get('/forgot', 'sbadm::forgot');
$routes->get('/login', 'sbadm::login');
$routes->get('/register', 'sbadm::register');
$routes->get('/404', 'sbadm::pagenotfound');
$routes->get('/blank', 'sbadm::blank');
$routes->get('/utilities-color', 'sbadm::color');
$routes->get('/utilities-border', 'sbadm::border');
$routes->get('/utilities-animation', 'sbadm::animation');
$routes->get('/utilities-other', 'sbadm::others');
$routes->get('/buttons', 'sbadm::buttons');
$routes->get('/cards', 'sbadm::cards');
