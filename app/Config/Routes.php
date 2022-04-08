<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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
//Dashboard
$routes->get('/', 'Dashboard::index');
$routes->get('/login', 'User::login');
//
//Table Perjalanan
$routes->get('/table_perjalanan', 'Catatan::index2', ['filter' => 'auth']);
$routes->get('/tambah_catatan', 'Catatan::tambah_catatan', ['filter' => 'auth']);
$routes->get('/scan_catatan','Catatan::scan_catatan', ['filter' => 'auth']);
$routes->put('/edit_catatan', 'Catatan::update', ['filter' => 'auth']);
$routes->get('/edit_catatan/(:any)/edit', 'Catatan::edit_catatan/$1', ['filter' => 'auth']);
$routes->get('/table_perjalanan/(:any)/delete', 'Catatan::destroy/$1', ['filter' => 'auth']);
// User
$routes->get('/admin','User::admin');
$routes->get('/tambah_user', 'User::tambah_user');
$routes->get('/detail_user/(:any)/detail', 'User::detail_user/$1');
$routes->get('/admin/(:any)/delete', 'User::destroy/$1');
$routes->get('/profile', 'User::profile', ['filter' => 'auth']);
$routes->put('/update_profile', 'User::update_profile');
$routes->put('/edit_profile/(:any)', 'User::edit_profile/$1');
$routes->post('/cek_login', 'User::cek_login');
$routes->get('/logout', 'User::logout');
//Add On
$routes->get('/news', 'Dashboard::news');
$routes->get('/blog', 'Dashboard::blog');
$routes->get('/blog2', 'Dashboard::blog2');
$routes->get('/about', 'Dashboard::about');
$routes->get('/print', 'PdfController::generate');
//
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
