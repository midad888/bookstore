<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->resource('BooksApi');
$routes->setDefaultController('LoginController');
$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/signin', 'LoginController::signin');
$routes->get('logout', 'LoginController::logout');
$routes->get('/dashboard', 'DashboardController::index',['filter' => 'auth']);
$routes->post('dashboard/createUser', 'DashboardController::createUser');
$routes->get('/dashboard/editUser/(:any)', 'DashboardController::edit/$1');
$routes->post('/dashboard/updateUser/(:any)', 'DashboardController::update/$1');
$routes->get('/dashboard/toggleActive/(:any)', 'DashboardController::toggleActivate/$1');
$routes->get('/book', 'ManagerController::index',['filter' => 'auth']);
$routes->post('book/create', 'ManagerController::createBook');
$routes->get('/book/editBook/(:any)', 'ManagerController::editBook/$1');
$routes->post('/book/updateBook/(:any)', 'ManagerController::updateBook/$1');
$routes->get('/book/deleteBook/(:any)', 'ManagerController::deleteBook/$1');
$routes->get('/invoice', 'SalesmanController::index',['filter' => 'auth']);
$routes->get('invoice/add', 'SalesmanController::add');
$routes->post('invoice/create', 'SalesmanController::create');
$routes->get('/invoice/edit/(:any)', 'SalesmanController::editInvoice/$1');
$routes->post('/invoice/update/(:any)', 'SalesmanController::update/$1');
$routes->get('/invoice/delete/(:any)', 'SalesmanController::deleteInvoice/$1');


//$routes->get('/book/editBook/(:any)', 'SalesmanController::editBook/$1');
//$routes->post('/book/updateBook/(:any)', 'SalesmanController::updateBook/$1');
//$routes->get('/book/deleteBook/(:any)', 'SalesmanController::deleteBook/$1');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
