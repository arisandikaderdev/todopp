<?php

use App\Controllers\Dashboard;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Homepage;
use App\Controllers\Login;
use App\Controllers\Singup;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [Homepage::class, 'index']);
$routes->match(['get', 'post'], 'login', [Login::class, 'index']);
$routes->match(['get', 'post'], 'singup', [Singup::class, 'index']);
$routes->get('dashboard', [Dashboard::class, 'index']);
