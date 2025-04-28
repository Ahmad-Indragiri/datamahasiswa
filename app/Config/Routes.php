<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');

// Rute untuk autentikasi
$routes->get('/login', 'AuthController::login');
$routes->post('/login/process', 'AuthController::loginProcess');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/process', 'AuthController::registerProcess');
$routes->get('/logout', 'AuthController::logout');

// Rute untuk dashboard
$routes->get('/dashboard', 'DashboardController::index');

// Rute untuk mahasiswa
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/mahasiswa/tambah', 'MahasiswaController::tambah');
$routes->post('/mahasiswa/tambahProses', 'MahasiswaController::tambahProses');
$routes->get('/mahasiswa/edit/(:segment)', 'MahasiswaController::edit/$1');
$routes->post('/mahasiswa/update/(:segment)', 'MahasiswaController::update/$1');
$routes->get('/mahasiswa/delete/(:segment)', 'MahasiswaController::delete/$1');

// Kelas
$routes->get('/kelas', 'KelasController::index');
$routes->get('/kelas/tambah', 'KelasController::tambah');
$routes->post('/kelas/tambahProses', 'KelasController::tambahProses');
$routes->get('/kelas/edit/(:segment)', 'KelasController::edit/$1');
$routes->post('/kelas/update/(:segment)', 'KelasController::update/$1');
$routes->get('/kelas/delete/(:segment)', 'KelasController::delete/$1');

// Mata Kuliah
$routes->get('mata_kuliah', 'MataKuliahController::index');
$routes->get('mata_kuliah/tambah', 'MataKuliahController::tambah');
$routes->post('mata_kuliah/tambahProses', 'MataKuliahController::tambahProses');
$routes->get('mata_kuliah/edit/(:num)', 'MataKuliahController::edit/$1');
$routes->post('mata_kuliah/update/(:num)', 'MataKuliahController::update/$1');
$routes->get('mata_kuliah/delete/(:num)', 'MataKuliahController::delete/$1');


