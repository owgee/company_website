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

Route::get('/', function () {
    return view('index');
});


Route::auth();

Route::get('/home', 'PageController@home')->name('home');
Route::get('/about' ,'PageController@about')->name('about');
Route::get('/costech' ,'PageController@costech')->name('costech');
Route::get('/rigel' ,'PageController@rigel')->name('rigel');
Route::get('/clients' ,'PageController@clients')->name('clients');
Route::get('/projects' ,'PageController@projects')->name('projects');
Route::get('/products' ,'PageController@products')->name('products');
Route::get('/contacts' ,'PageController@contacts')->name('contacts');
Route::get('/portfolio' ,'PageController@portfolio')->name('portfolio');

/**
 * our projects
 */
Route::get('/karibusms' ,'PageController@karibusms')->name('karibusms');
Route::get('/prayer' ,'PageController@prayer')->name('prayer');
Route::get('/hotleo' ,'PageController@hotleo')->name('hotleo');
Route::get('/meter' ,'PageController@meter')->name('meter');
Route::get('/pspf' ,'PageController@pspf')->name('pspf');


/**
 * our services
 */
Route::get('/software','ServiceController@software')->name('software');
Route::get('/mobile','ServiceController@mobile')->name('mobile');
Route::get('/payment','ServiceController@payment')->name('payment');
Route::get('/linux','ServiceController@linux')->name('linux');
Route::get('/database','ServiceController@database')->name('database');
Route::get('/website','ServiceController@website')->name('website');