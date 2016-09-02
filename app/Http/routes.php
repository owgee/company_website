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
    return view('website.home');
});


    Route::group(array('prefix' => 'product'), function () {
        Route::get('/{product}', 'PageController@product');
    });
    Route::post('/contact', 'AdminController@contact');
    Route::get('/', function () {
        return view('website.home');
    });
    Route::group(array('prefix' => 'service'), function () {
        Route::get('/{service}', 'PageController@service');
    });
    Route::get('/{page}', 'PageController@open_page');


Route::get('/search/{tag?}','PageController@search');
//
//Route::get('/home', 'PageController@home')->name('home');
//Route::get('/about' ,'PageController@about')->name('about');
//Route::get('/costech' ,'PageController@costech')->name('costech');
//Route::get('/rigel' ,'PageController@rigel')->name('rigel');
//Route::get('/clients' ,'PageController@clients')->name('clients');
//Route::get('/project' ,'PageController@projects')->name('projects');
//Route::get('/products' ,'PageController@products')->name('products');
//Route::get('/contacts' ,'PageController@contacts')->name('contacts');
//Route::get('/portfolio' ,'PageController@portfolio')->name('portfolio');
//
///**
// * our projects
// */
//Route::get('/karibusms' ,'PageController@karibusms')->name('karibusms');
//Route::get('/prayer' ,'PageController@prayer')->name('prayer');
//Route::get('/hotleo' ,'PageController@hotleo')->name('hotleo');
//Route::get('/meter' ,'PageController@meter')->name('meter');
//Route::get('/pspf' ,'PageController@pspf')->name('pspf');
//
//
///**
// * our services
// */
//Route::get('/software','ServiceController@software')->name('software');
//Route::get('/mobile','ServiceController@mobile')->name('mobile');
//Route::get('/payment','ServiceController@payment')->name('payment');
//Route::get('/linux','ServiceController@linux')->name('linux');
//Route::get('/database','ServiceController@database')->name('database');
//Route::get('/website','ServiceController@website')->name('website');
//
//
//Route::group(array('prefix' => 'admin'), function () {
//    Route::get('/admin', function () {
//        return view('welcome');
//    });
//
////Route::auth();
//
////Route::get('/home', 'HomeController@index');
//    //$api = app('Dingo\Api\Routing\Router');
//    //$api->version('v1', function ($api) {
////    $api->get('users/{id}', 'UserController@show');
//   // });
//
//    Route::get('/', array('as' => 'home', function () {
//        return View::make('welcome');
//    }));
//
//    Route::group(array('middleware' => 'sentry.admin'), function () {
//        Route::resource('/portfolio', 'AdminController');
//        Route::resource('/clients', 'ClientsController');
//    });
//});

Route::get('/about_us', function () {
    return view('website.about');
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