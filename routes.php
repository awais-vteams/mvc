<?php

/** @var App\Application $router */

$router->get('', 'App\Controllers\IndexController@index');
$router->post('save', 'App\Controllers\IndexController@post');

$router->get('404', 'App\Controllers\ExceptionNotFoundController@get');
