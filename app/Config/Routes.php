<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout', ['filter' => 'auth']);

// Register
$routes->get('/regadmin', 'Register::index');
$routes->post('/regadmin/save', 'Register::save');

// Dashboard
$routes->get('/', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/admin', 'Dashboard::admin', ['filter' => 'auth']);

// Produk
$routes->get('/produk', 'Product::index', ['filter' => 'auth']);
$routes->get('/produk/get', 'Product::getApi');
$routes->get('/produk/post', 'Product::postApi');

// Edit Produk
$routes->get('/produk/edit/(:alphanum)', 'Product::edit/$1', ['filter' => 'auth']);

// Bahan
$routes->get('/bahan', 'Material::index', ['filter' => 'auth']);

// Edit Bahan
$routes->get('/bahan/edit/(:alphanum)', 'Material::edit/$1', ['filter' => 'auth']);

// Profile
$routes->get('/profile', 'Profile::index', ['filter' => 'auth']);

// $routes->setAutoRoute(true);