<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->match(['get', 'post'], '/page/login', 'Page::login');
$routes->match(['get', 'post'], '/page/admin', 'Page::admin');
$routes->match(['get', 'post'], '/page/register', 'Page::register');
$routes->match(['get', 'post'], '/admin/pengguna', 'Page::pengguna');
$routes->match(['get', 'post'], '/admin/kelas', 'Page::kelas');
$routes->match(['get', 'post'], '/admin/tambah kelas', 'Page::tamkelas');
$routes->match(['get', 'post'], '/user/home', 'Page::home');
$routes->match(['get', 'post'], '/user/det', 'Page::det');
$routes->match(['get', 'post'], '/user/kontak', 'Page::kontak');
$routes->match(['get', 'post'], '/user/bisnis', 'Page::bisnis');
$routes->match(['get', 'post'], '/user/keranjang', 'Page::keranjang');
$routes->match(['get', 'post'], '/user/checkout', 'Page::checkout');
$routes->match(['get', 'post'], '/user/print', 'Page::print');
$routes->match(['get', 'post'], '/user/detakses', 'Page::akses');
$routes->match(['get', 'post'], '/user/detakses/open', 'Page::open');

/**
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
