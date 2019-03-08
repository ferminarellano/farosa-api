<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
	return $router->app->version();
});

$router->get('/productos', function(){
	return 'Listado de Productos';
});

$router->get('/clientes', function(){
	return 'Listado de Clientes';
});

$router->get('/pedidos', function(){
	return 'Listado de Productos';
});


$router->post('/pedido', function(){
});

