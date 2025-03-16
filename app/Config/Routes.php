<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Dashboard::index');
$routes->get('/registration/member', 'Registration::index');
$routes->get('/registration/member-attendance', 'Registration::indexAttendanceMember');
$routes->get('/registration/payment-method', 'Registration::indexPaymentMethod');
$routes->get('/registration/package', 'Registration::indexPackage');
$routes->get('/transaction/application-form', 'Transaction::index');
$routes->get('/report/member-report', 'Report::index');
$routes->get('/report/application-form-report', 'Report::indexReportApplicationForm');

