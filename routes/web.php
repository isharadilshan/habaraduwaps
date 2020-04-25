<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group(['namespace' => 'Page'],function(){
    Route::get('/','PageController@index')->name('main');
    Route::get('/search', 'PageController@search')->name('search');
    Route::get('/contact','ContactController@index')->name('contact');
    Route::post('/contact','contactController@send');
    // Route::get('/recent','PageController@recent')->name('recent');
    // Route::get('cars/{cars?}','PageController@cars')->name('cars');
    // Route::get('cars/tags/{tags}','PageController@tag')->name('tags');
    // Route::get('cars/categories/{categories}','PageController@category')->name('categories');
    
});

Auth::routes(['verify' => true]);

Route::group(['namespace' => 'Admin' ,'middleware' => ['admin','verified']], function() {

    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::resource('/admin/tag','TagController');
    Route::resource('/admin/category','CategoryController');
    Route::resource('/admin/message','MessageController');
    Route::resource('/admin/user','UserController');

});

Route::group(['namespace' => 'Service' ,'middleware' => ['service', 'verified']], function() {

    Route::get('/service', 'ServiceController@index');

});

Route::group(['namespace' => 'User' ,'middleware' => ['user', 'verified']], function() {

    Route::get('/user', 'UserController@index');

});


//change redirectTo in auth controllers after modifying the /home