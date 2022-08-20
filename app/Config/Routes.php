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
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);
$routes->get('/register','UserAccount::register');
$routes->get('/update','UserAccount::update');
$routes->post('/submit','UserAccount::addUser');
$routes->get('/login','Login::login');
$routes->post('/authoriseUser','Login::authorise');
$routes->get('/dashboard','Login::dashboard');
$routes->get('/logout','Login::logout');
$routes->get('/loginAdmin','Admin::loginAdmin');
$routes->get('/dashboardAdmin','Admin::dashboardAdmin', ['filter' => 'auth']);
$routes->post('/authoriseAdmin','Admin::authoriseAdmin');
$routes->get('/userView','UserAccount::showUserView', ['filter' => 'auth']);
$routes->get('/classView','Classes::showClassView', ['filter' => 'auth']);
$routes->add('/classEdit/(:num)','Classes::classEdit/$1', ['filter' => 'auth']);
$routes->post('/classUpdate', 'Classes::classUpdate', ['filter' => 'auth']);
$routes->add('/classDelete/(:num)','Classes::classDelete/$1', ['filter' => 'auth']);
$routes->get('/adminView','Admin::showAdminView', ['filter' => 'auth']);
$routes->add('/userEdit/(:num)','UserAccount::userEdit/$1', ['filter' => 'auth']);
$routes->post('/userUpdate', 'UserAccount::userUpdate', ['filter' => 'auth']);
$routes->add('/userDelete/(:num)','UserAccount::userDelete/$1', ['filter' => 'auth']);
$routes->add('/profileEdit/(:num)','UserAccount::profileEdit/$1', ['filter' => 'loggedInAuth']);
$routes->post('/profileUpdate', 'UserAccount::profileUpdate', ['filter' => 'loggedInAuth']);
$routes->get('/uploadView','Classes::uploadView', ['filter' => 'auth']);
$routes->post('/upload','Classes::upload', ['filter' => 'auth']);
$routes->get('/video','Classes::video', ['filter' => 'auth']);
$routes->get('/classes','Classes::classes', ['filter' => 'loggedInAuth']);
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
