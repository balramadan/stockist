<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Dashboard
$routes->get('/', 'Dashboard::index', ['filter' => 'auth']);

// Produk
$routes->get('/produk', 'Product::index', ['filter' => 'auth']);
$routes->get('/produk/get', 'Product::getApi');
$routes->get('/produk/post', 'Product::postApi');

// Edit Produk
$routes->get('produk/edit/(:alphanum)', 'Product::edit/$1');

// Login
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

// Register
$routes->get('/regadmin', 'Register::index');
$routes->post('/regadmin/save', 'Register::save');

// $routes->setAutoRoute(true);
