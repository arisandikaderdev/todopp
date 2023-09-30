<?php

use App\Controllers\About;
use App\Controllers\Contact;
use App\Controllers\Dashboard;
use App\Controllers\DeleteTodo;
use App\Controllers\Edit;
use App\Controllers\EditTodo;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Homepage;
use App\Controllers\Login;
use App\Controllers\PermanentDelete;
use App\Controllers\Restoretodo;
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

// pages
$routes->match(['get', 'post'], 'dashboard', [Dashboard::class, 'index'], ['filter' => 'role:user']);
$routes->get('about', [About::class, 'index'], ['filter' => 'role:user']);
$routes->get("contact", [Contact::class, 'index'], ['filter' => 'role:user']);
$routes->match(['get', 'post'], 'editProfile', [Edit::class, 'index'], ['filter' => 'role:user']);

// todo
$routes->get('todo/(:segment)', [Todo::class, 'index'], ['filter' => 'role:user']);

// trash
$routes->get('trash', [Trash::class, 'index'], ['filter' => 'role:user']);
$routes->get('todo/trash/(:segment)', [Todo::class, 'trashTodo'], ['filter' => 'role:user']);

// crud
$routes->post('delete', [DeleteTodo::class, 'index'], ['filter' => 'role:user']);
$routes->post('permanentdelete', [PermanentDelete::class, 'index'], ['filter' => 'role:user']);
$routes->post('permanentdeleteone', [PermanentDelete::class, 'permanentOne'], ['filter' => 'role:user']);

$routes->post('restore', [Restoretodo::class, 'index'], ['filter' => 'role:user']);
$routes->post('restore/trash', [Restoretodo::class, 'restoreOne'], ['filter' => 'role:user']);

$routes->post('edit', [EditTodo::class, 'index'], ['filter' => 'role:user']);
