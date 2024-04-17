<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Dashboard
$routes->get('/', 'Dashboard::index', ['filter' => 'auth']);

// Product
$routes->get('/product', 'Product::index', ['filter' => 'auth']);

// Login
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

// Register
$routes->get('/regadmin', 'Register::index');
$routes->post('/regadmin/save', 'Register::save');

// $routes->setAutoRoute(true);
