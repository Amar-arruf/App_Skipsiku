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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::login');

// $routes->get('/login', 'Auth::login');
$routes->get('/dashboard', 'Home::index');
$routes->get('/datapenduduk', 'Page::datapenduduk');
$routes->get('/datacriteriapenduduk', 'Page::datacriteriapenduduk');
$routes->get('/datacriteriaatribut', 'Page::datacriteriatribut');
$routes->get('/prosesmetodec45', 'Proses::index');
$routes->get('/prosesmetodekmeans', 'Proseskmeans::index');
$routes->get('/performance', 'Performance::index');

$routes->group('prosesmetodec45', function($routes) {
    $routes->add('importcsv', 'Proses::uploadcsv');
    $routes->add('importcsvdatauji', 'Proses::uploadcsvdatauji');
    $routes->add('delete/(:num)', 'Proses::delete/$1');
});

$routes->group('prosesmetodekmeans', function($routes) {
    $routes->add('uploadcsv', 'Proseskmeans::importcsv');
    $routes->add('Delete/(:num)', 'Proseskmeans::Delete/$1');
});


$routes->group('datapenduduk', function($routes){
    $routes->add('data/new', 'ManipulasiDataPenduduk::create');
    $routes->add('data/(:segment)/edit', 'ManipulasiDataPenduduk::edit/$1');
    $routes->add('data/(:segment)/delete', 'ManipulasiDataPenduduk::delete/$1');
});

$routes->group('datacriteriapenduduk', function($routes){
    $routes->add('data/new', 'ManipulasiDataPendudukValue::create');
    $routes->add('data/(:segment)/edit', 'ManipulasiDataPendudukValue::edit/$1');
    $routes->add('data/(:segment)/delete', 'ManipulasiDataPendudukValue::delete/$1');
});

$routes->group('datacriteriaatribut', function($routes){
    $routes->add('data/new', 'ManipulasiDataCriteriaAtribut::create');
    $routes->add('data/(:segment)/edit', 'ManipulasiDataCriteriaAtribut::edit/$1');
    $routes->add('data/(:segment)/delete', 'ManipulasiDataCriteriaAtribut::delete/$1');

    $routes->add('dataoption/(:segment)/new', 'ManipulasiDataCriteriaAtributOption::create/$1');
    $routes->add('dataoption/(:segment)/edit', 'ManipulasiDataCriteriaAtributOption::edit/$1');
    $routes->add('dataoption/(:segment)/delete', 'ManipulasiDataCriteriaAtributOption::delete/$1');
});

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
