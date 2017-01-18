<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registerCustomer', 'HomeCustomerController@registerCustomer');
Route::post('/registerCustomer', 'HomeCustomerController@registerCustomer');
Route::get('/loginCustomer', 'HomeCustomerController@loginCustomer');
Route::post('/loginCustomer', 'HomeCustomerController@loginCustomer');


Auth::routes();

Route::get('/dashboard', 'HomeCustomerController@dashboard');
Route::get('/customer/add', 'HomeCustomerController@addOffice');
Route::get('/customer/office', 'HomeCustomerController@office');


Route::get('/homeOwner', 'HomeOwnerController@index');
Route::get('/homeOwner/add', 'HomeOwnerController@addItem');
Route::get('/homeOwner/delete', 'HomeOwnerController@deleteItem');
Route::get('/homeOwner/edit', 'HomeOwnerController@editItem');
Route::get('/homeOwner/editStep', 'HomeOwnerController@editStepItem');
