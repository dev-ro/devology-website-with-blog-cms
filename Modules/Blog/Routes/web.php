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

Route::prefix('blog')->group(function() {
    Route::get('/{slug}' , 'BlogController@showBlog')->name('blog-show-single');
    Route::get('/', 'BlogController@index')->name('blogs-index');
});
