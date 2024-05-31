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
$routes->post('/produk/save', 'Product::save');

// Edit Produk
$routes->get('/produk/edit/(:alphanum)', 'Product::edit/$1');
$routes->post('/produk/update', 'Product::update');
$routes->post('/produk/delete/(:alphanum)', 'Product::delete/$1');

// Bahan
$routes->get('/bahan', 'Material::index');
$routes->post('/bahan/add', 'Material::save');

// Edit Bahan
$routes->get('/bahan/edit/(:alphanum)/(:alphanum)', 'Material::edit/$1/$2');
$routes->post('/bahan/up', 'Material::updated');
$routes->post('/bahan/delete/(:alphanum)/(:alphanum)', 'Material::delete/$1/$2');

// Profile
$routes->get('/profile', 'Profile::index');
$routes->post('/profile/updated', 'Profile::Updated');
// $routes->setAutoRoute(true);

// api router


// $routes->get('/api', 'auth::getApi');
// $routes->post('/api', 'auth::postApi');