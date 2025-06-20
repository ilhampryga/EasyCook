<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/pages/resep', 'Pages::resep');
$routes->get('/pages/login', 'Pages::login');
$routes->get('/pages/view_resep', 'Pages::view_resep');
$routes->get('/pages/ulasan', 'Pages::ulasan');

