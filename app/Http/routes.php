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


Route::auth();
Route::get('/', function () {
    return view('new_website.home');
});

/*All routes designed for the new website, we will reformat later*/
Route::group(array('prefix' => 'new'), function () {

    Route::group(array('prefix' => 'product'), function () {
        Route::get('/{product}', 'PageController@product');
    });
    Route::post('/contact', 'AdminController@contact');
    Route::get('/', function () {
        return view('new_website.home');
    });
    Route::group(array('prefix' => 'service'), function () {
        Route::get('/{service}', 'PageController@service');
    });
    Route::get('/{page}', 'PageController@open_page');

});
Route::get('/about_us', function () {
    return view('new_website.about');
});

/*Admin Routes*/
Route::group(array('prefix' => 'admin'), function () {
    Route::get('/admin', function () {
        return view('welcome');
    });

    Route::get('/', array('as' => 'home', function () {
        return view('welcome');
    }));
    /*Routes protection - allow access to admin group only*/

    Route::group(array('middleware' => 'sentry.admin'), function () {
        Route::resource('/portfolio', 'AdminController');
        Route::resource('/clients', 'ClientsController');
    });
});