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

Route::prefix('services')->group(function() {
    Route::get('/{slug}' , 'Servicescontroller@singleService')->name('service-detail');
    Route::get('/', 'ServicesController@index')->name('services-index');
});
