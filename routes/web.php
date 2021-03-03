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

$router->get('/key', function() {
    return Str::random(32);
});


$router->group(['prefix' => 'user'], function () use ($router) {
    // register user
    $router->post('register', 'AuthController@register');

    // login user
    $router->post('login', 'AuthController@login');

    // update user
    $router->patch('/', 'UserController@update');

    // delete user
    $router->patch('/{id}', 'UserController@update');
});

$router->group(['prefix' =>  'awards'], function () use ($router) {
    // list awards
    $router->get('/', 'AwardsController@index');

    // update awards
    $router->patch('/{id}', 'UserController@update');

    // create a awards
    $router->post('create', 'AuthController@store');

    // delete a awards
    $router->delete('{id}', 'AwardsController@destroy');

    // list of winners in the week
    $router->delete('winners', 'WinnersController@index');

});
