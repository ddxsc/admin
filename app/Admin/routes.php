<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    //$router->resource('users', UserController::class);
    $router->resource('poetry', PoetryController::class);
    $router->resource('poetry_author', PoetryAuthorController::class);

    $router->resource('poems', PoemsController::class);
    $router->resource('poems_author', PoemsAuthorController::class);

});
