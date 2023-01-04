<?php

namespace Config;

use App\Controllers\AuthController;

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



$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout','AuthController::logout');


// Routes Admin begin
$routes->group('admin', ['filter'    => 'admin_filter'], function($routes){

    // Routes Data Fakultas begin
    $routes->get('fakultas/(:any)', 'admin\Fakultas\FakultasController::fakultas/$1');
    $routes->get('tambah_fakultas/(:any)', 'admin\Fakultas\FakultasController::tambah_fakultas/$1');
    $routes->post('proses_tambah_fakultas', 'admin\Fakultas\FakultasController::proses_tambah_fakultas');
    $routes->get('v_edit_fakultas/(:any)', 'admin\Fakultas\FakultasController::v_edit_fakultas/$1');
    $routes->delete('hapus_fakultas/(:any)', 'admin\Fakultas\FakultasController::hapus_fakultas/$1');
    $routes->post('proses_edit_fakultas/(:any)', 'admin\Fakultas\FakultasController::proses_edit_fakultas/$1');
    // Routes Data Fakultas end

    // Routes detail data Fakultas begin
    $routes->get('detail_fakultas/(:any)', 'admin\Fakultas\FakultasController::detail_fakultas/$1');
    $routes->get('tambah_pejabat_fakultas/(:any)', 'admin\Fakultas\FakultasController::v_tambah_pejabat_fakultas/$1');
    $routes->post('proses_tambah_pejabat_fakultas/(:any)', 'admin\Fakultas\FakultasController::proses_tambah_pejabat_fakultas/$1');
    $routes->get('edit_pejabat_fakultas/(:any)', 'admin\Fakultas\FakultasController::v_edit_pejabat_fakultas/$1');
    $routes->post('proses_edit_pejabat_fakultas/(:any)', 'admin\Fakultas\FakultasController::proses_edit_pejabat_fakultas/$1');
    $routes->delete('hapus_pejabat_fakultas/(:any)', 'admin\Fakultas\FakultasController::hapus_pejabat_fakultas/$1');
    $routes->post('cari_periode_fakultas/(:any)', 'admin\Fakultas\FakultasController::cari_periode_fakultas/$1');
    // Routes detail data Fakultas end
});

// Routes Admin end



// Routes Dosen begin
// Routes Dosen end



// Routes Mahasiswa begin
// Routes Mahasiswa end


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
