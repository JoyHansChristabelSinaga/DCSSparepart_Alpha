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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//initialization
$routes->get('/', 'Login::index');

//Users:
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
$routes->delete('/deleteuser/(:alphanum)','Usereditor::userdelete/$1');
$routes->get('/addLogout', 'Login::addlog_out');
$routes->get('/addLogin', 'Login::addlog_in');
$routes->get('/edit_user/(:alphanum)','Usereditor::edit_user/$1');
$routes->post('/update_user/(:alphanum)','Usereditor::update_user/$1');

//SparePart:
$routes->delete('/delete/(:num)','SparePartControl::delete/$1');
$routes->get('/create','SparePartControl::create');
$routes->post('/store','SparePartControl::store');
$routes->get('/edit/(:num)','SparePartControl::edit/$1');
$routes->post('/update/(:num)','SparePartControl::update/$1');
$routes->post('/adding','SparePartControl::adding');
$routes->post('/taking','SparePartControl::taking');

//mainmenu
$routes->get('/mainmenu','mainmenucontrol::index');
$routes->get('/add','mainmenucontrol::addscreen');
$routes->get('/take','mainmenucontrol::takescreen');
$routes->get('/history1','mainmenucontrol::history_1'); //Store
$routes->get('/history2','mainmenucontrol::history_2'); //Take
$routes->get('/History','mainmenucontrol::history'); //User
$routes->get('/list','mainmenucontrol::sparepart_list');
$routes->get('/user','Usereditor::user');

//Reset Admin Account, insert to URL Directly
$routes->get('/recover_admin_account', 'adminregister_Backup::index');
$routes->get('/98896461328516', 'adminregister_Backup::process_recover');

//error handlings
$routes->get('/edit/mainmenu','mainmenucontrol::index');
$routes->get('/edit_user/mainmenu','mainmenucontrol::index');

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
