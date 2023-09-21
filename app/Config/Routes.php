<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/product', 'ProductController::index');
$routes->get('edit/(:num)', 'ProductController::edit/$1');
$routes->post('save', 'ProductController::save');
$routes->get('delete/(:num)', 'ProductController::delete/$1');