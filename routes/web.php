<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'Note'], function() use ($router) {
    $router->get('/', 'NoteController@index');
    $router->get('/{id}', 'NoteController@show');
    $router->post('/', 'NoteController@store');
});


$router->group(['prefix' => 'Folder'], function() use ($router) {
    $router->get('/', 'FolderController@index');
    $router->get('/{id}', 'FolderController@show');
    $router->post('/', 'FolderController@store');
});
