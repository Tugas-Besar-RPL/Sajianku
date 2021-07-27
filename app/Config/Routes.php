<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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

$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

$routes->get('/admin/employee', 'Employee::index');
$routes->post('/admin/get-employee', 'Employee::getDataEmployee');
$routes->post('/admin/save-employee', 'Employee::save');
$routes->add('/admin/delete-employee/(:any)', 'Employee::delete/$1');
$routes->add('/admin/update-employee/(:any)', 'Employee::update/$1');

$routes->get('/admin/table', 'Table::index');
$routes->post('/admin/get-table', 'Table::getDataTable');
$routes->post('/admin/save-table', 'Table::save');
$routes->add('/admin/delete-table/(:any)', 'Table::delete/$1');
$routes->add('/admin/update-table/(:any)', 'Table::update/$1');

$routes->get('/admin/category', 'Category::index');
$routes->post('/admin/get-category', 'Category::getDataCategory');
$routes->post('/admin/save-category', 'Category::save');
$routes->add('/admin/delete-category/(:any)', 'Category::delete/$1');
$routes->add('/admin/update-category/(:any)', 'Category::update/$1');

$routes->get('/admin/menu', 'MenuAdmin::index');
$routes->post('/admin/get-menu', 'MenuAdmin::getDataCategory');
$routes->post('/admin/save-menu', 'MenuAdmin::save');
$routes->add('/admin/delete-menu/(:any)', 'MenuAdmin::delete/$1');
$routes->add('/admin/update-menu/(:any)', 'MenuAdmin::update/$1');

$routes->get('/pelayan/order', 'Order::index');
$routes->add('/pelayan/order-menu/(:any)/(:any)', 'Order::order_menu');
$routes->post('/pelayan/add-cart', 'Cart::index');
$routes->post('/pelayan/remove-item', 'Cart::remove_item');
$routes->post('/pelayan/save-order', 'Order::save');
$routes->post('/pelayan/set-session-qty', 'Cart::set_session');

$routes->get('/koki/manageorder', 'Manageorders::index');
$routes->post('/koki/get-manageorder', 'Manageorders::getDataManageorders');
$routes->get('/koki/menu', 'Menus::index');
$routes->post('/koki/get-menus', 'Menus::getDataMenus');
$routes->add('/koki/updateAvailableMenu/(:any)', 'Menus::updateAvailable/$1');
$routes->add('/koki/updateNotAvailableMenu/(:any)', 'Menus::updateNotAvailable/$1');
$routes->add('/kasir/report', 'Report::index');

$routes->get('/manageorders', 'manageorders::index');

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
