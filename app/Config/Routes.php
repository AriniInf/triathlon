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
$routes->get('/home.login', 'Home::login');
$routes->get('/logout', 'Login::logout');

$routes->get('/register','Register::index');
$routes->get('/login','Login::index');
$routes->get('/paket','Paket::index');
$routes->get('/dashboard','Dashboard::index');
$routes->post('/post-register','Register::save');
$routes->post('/post-login','Login::auth');
$routes->post('/daftar', 'Invoice::addInvoice');
$routes->post('/invoice', 'Invoice::index');

$routes->get('/triathlon_unesa', 'Home::triathlon_unesa');
$routes->get('/duathlon_unesa','Home::duathlon_unesa');
$routes->get('/gallery','Home::gallery');

$routes->get('/dashboard_pembayaran','Dashboard::pembayaran');





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
