<?php

use App\Controllers\About;
use App\Controllers\Contact;
use App\Controllers\Dashboard;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Homepage;
use App\Controllers\Login;
use App\Controllers\Singup;
use App\Controllers\Todo;
use App\Controllers\Trash;

use function PHPUnit\Framework\containsOnly;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [Homepage::class, 'index']);
$routes->match(['get', 'post'], 'login', [Login::class, 'index']);
$routes->match(['get', 'post'], 'singup', [Singup::class, 'index']);
$routes->get('dashboard', [Dashboard::class, 'index']);
$routes->get('trash', [Trash::class, 'index']);
$routes->get('todo', [Todo::class, 'index']);
$routes->get('about', [About::class, 'index']);
$routes->get("contact", [Contact::class, 'index']);
