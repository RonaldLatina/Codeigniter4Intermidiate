<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//routes for books
$routes->get('/books', 'BookController::index');
$routes->get('/books/add', 'BookController::createBook');
$routes->get('/books/store', 'BookController::storeBook');
$routes->post('/books/store', 'BookController::storeBook');

$routes->get('/books/list', 'BookController::bookList');
$routes->get('/books/view/(:num)', 'BookController::bookView/$1');

$routes->post('/books/update/(:num)', 'BookController::bookUpdate/$1');
$routes->get('/books/delete/(:num)', 'BookController::bookDelete/$1');

//routes for users
$routes->get('/user/login', 'UserController::index');
