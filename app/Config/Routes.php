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
// $routes->match(['get', 'post'], 'login', [Login::class, 'index']);
$routes->match(['get', 'post'], 'singup', [Singup::class, 'index']);


$routes->match(['get', 'post'], 'dashboard', [Dashboard::class, 'index'], ['filter' => 'role:user']);
$routes->get('trash', [Trash::class, 'index'], ['filter' => 'role:user']);
$routes->get('todo', [Todo::class, 'index'], ['filter' => 'role:user']);
$routes->get('about', [About::class, 'index'], ['filter' => 'role:user']);
$routes->get("contact", [Contact::class, 'index'], ['filter' => 'role:user']);
