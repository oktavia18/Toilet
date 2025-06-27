<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Login::index');

// Login routes
$routes->post('login', 'Login::index');
$routes->get('logout', 'Login::logout');
// Dashboard route
$routes->get('dashboard', 'Dashboard::index');

// User/Inspector routes
$routes->group('user', function($routes) {
    $routes->get('/', 'User::index');
    $routes->post('save', 'User::save');
    $routes->post('update', 'User::update');
    $routes->post('delete', 'User::delete');
    $routes->get('cetak_pdf', 'User::cetak_pdf');
});

// Toilet routes
$routes->group('toilet', function($routes) {
    $routes->get('/', 'Toilet::index');
    $routes->post('save', 'Toilet::save');
    $routes->post('update', 'Toilet::update');
    $routes->post('delete', 'Toilet::delete');
    $routes->get('cetak_pdf', 'Toilet::cetak_pdf');
});

// Checklist routes
$routes->group('checklist', function($routes) {
    $routes->get('/', 'Checklist::index');
    $routes->post('save', 'Checklist::save');
    $routes->post('update', 'Checklist::update');
    $routes->post('delete', 'Checklist::delete');
    $routes->get('cetak_pdf', 'Checklist::cetak_pdf');
    $routes->get('cetak_pdf_belum_diperiksa', 'Checklist::cetak_pdf_belum_diperiksa');
    $routes->get('cetak_pdf_rusak', 'Checklist::cetak_pdf_rusak');
    $routes->get('cetak_pdf_kotor', 'Checklist::cetak_pdf_kotor');
});