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
$routes->setDefaultController('NewshomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// ---------------------Routes for Login Registration--------------------------------------------

$routes->get('/login', 'Auth::login');
$routes->get('log', 'Auth::logout');
$routes->get('auth/register', 'Auth::register');
// ---------------------Routes for Newspaper--------------------------------------------


$routes->post('createnewspaper','NewspaperController::store');
$routes->get('editNewspaper/(:num)', 'NewspaperController::edit/$1');
$routes->put('updateNewspaperRecord/(:num)', 'NewspaperController::update/$1');
$routes->get('deleteNewspaper/(:num)', 'NewspaperController::delete/$1');
$routes->get('searchNewspaper', 'NewspaperController::search');


// -------------------Routes for NewsCategories-------------------------------


$routes->post('createnewsCategories','NewscategoriesController::store');
$routes->get('editNewspaperCategories/(:num)', 'NewscategoriesController::edit/$1');
$routes->put('updateNewscategoryRecord/(:num)', 'NewscategoriesController::update/$1');
$routes->get('deleteNewspaperCategories/(:num)', 'NewscategoriesController::delete/$1');
$routes->get('searchNewspaperCategory', 'NewscategoriesController::search');

//-------------------------------------Routes for News----------------------------------


$routes->post('createnews','NewsController::store');
$routes->get('editNews/(:num)', 'NewsController::edit/$1');
$routes->put('updateNews/(:num)', 'NewsController::update/$1');
$routes->get('deleteNews/(:num)', 'NewsController::delete/$1');
$routes->get('searchNews', 'NewsController::search');


//-------------------------Routes for NewsMapping----------------------------------


$routes->post('createnewsmapping','NewsmappingController::store');
$routes->get('editNewsmapping/(:num)', 'NewsmappingController::edit/$1');
$routes->put('updateNewsmapping/(:num)', 'NewsmappingController::update/$1');
$routes->get('deleteNewsmapping/(:num)', 'NewsmappingController::delete/$1');
$routes->get('searchNewsmapping', 'NewsmappingController::search');

//-------------------------Routes for Change Password----------------------------------

$routes->get('editchange_password/(:num)', 'ProfileController::changepassword/$1');
$routes->put('update_password/(:num)', 'ProfileController::updatepassword/$1');



//-------------------------Routes for Change Password----------------------------------

$routes->group('/', ['filter'=>'check_login'],function($routes)
{
    $routes->get('dashboard/index','Dashboard::index');
    $routes->get('NewscategoriesController/index','NewscategoriesController::index');
    $routes->get('NewsController/index','NewsController::index');
    $routes->get('NewspaperController/index','NewspaperController::index');
    $routes->get('NewsmappingController/index','NewsmappingController::index');
    $routes->get('ProfileController/index','ProfileController::index');

});

$routes->group('/', ['filter'=>'alreadyloggedIn'],function($routes)
{
    $routes->get('auth/login','Auth::login');
    $routes->get('auth/register','Auth::register');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
