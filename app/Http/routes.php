<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



    Route::get('/admin', function () {
        return view('welcome');
    });
//Route::get('/', function () {
//    return view('website.home');
//});

//Route::auth();

//Route::get('/home', 'HomeController@index');
    $api = app('Dingo\Api\Routing\Router');
    $api->version('v1', function ($api) {
//    $api->get('users/{id}', 'UserController@show');
    });

    Route::get('/', array('as' => 'home', function () {
        return View::make('welcome');
    }));

Route::group(array('middleware' => 'sentry.admin'), function () {
    Route::resource('/portfolio', 'AdminController');
    Route::resource('/clients', 'ClientsController');
});
