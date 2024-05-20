<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

// Register
$routes->get('/regadmin', 'Register::index');
$routes->post('/regadmin/save', 'Register::save');

// Dashboard
$routes->get('/', 'Dashboard::index');
$routes->get('/admin', 'Dashboard::admin');

// Produk
$routes->get('/produk', 'Product::index');
$routes->get('/produk/get', 'Product::getApi');
$routes->get('/produk/post', 'Product::postApi');

$routes->post('/product/save', 'Product::save');


// Edit Produk
$routes->get('/produk/edit/(:alphanum)', 'Product::edit/$1');

// Bahan
$routes->get('/bahan', 'Material::index');

// Edit Bahan
$routes->get('/bahan/edit/(:alphanum)', 'Material::edit/$1', ['filter' => 'auth']);

// Profile
$routes->get('/profile', 'Profile::index', ['filter' => 'auth']);

// $routes->setAutoRoute(true);

// api router


// $routes->get('/api', 'auth::getApi');
// $routes->post('/api', 'auth::postApi');