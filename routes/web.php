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

$router->get('/', 'HomeController@index');
$router->get('/contact', 'HomeController@contact');
$router->get('/portfolio', 'HomeController@portfolio');

//$router->domain('by.duck.me.uk')->group(function () use ($router) {
//    $router->get('/', 'HomeController@portfolio');
//});