<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/home/register', 'Home::register');
$routes->get('/home/login', 'Home::login');
$routes->get('/logout', 'Login::logout');

$routes->get('/register','Register::index');
$routes->get('/login','Login::index');
$routes->get('/duathlon','Paket::index');
$routes->get('/triathlon','Paket::triathlon');
$routes->get('/dashboard','Dashboard::index');
$routes->post('/post-register','Register::save');
$routes->post('/post-login','Login::auth');
$routes->post('/daftar', 'Invoice::addInvoice');
$routes->post('/upload-bukti', 'Invoice::uploadBukti');
$routes->post('/invoice', 'Invoice::index');

$routes->get('/gallery','Home::gallery');

$routes->get('/dashboard_pembayaran','Dashboard::pembayaran');

$routes->get('/login-admin', 'Admin::index');
$routes->get('/dashboard-admin', 'Admin::dashboard_admin');
$routes->post('/post-login-admin','Admin::auth');
$routes->get('/logout', 'Admin::logout');

$routes->get('/rank-men','Home::rank_men');
$routes->get('/rank-women','Home::rank_women');

$routes->get('/coba','Coba::index');
$routes->post('/post-coba', 'Coba::insert_db');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
