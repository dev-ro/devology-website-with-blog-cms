<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/' , 'PageController@index')->name('home.index');
Route::get('/contact' , 'PageController@contact')->name('pages_contact');
Route::get('/about' , 'PageController@about')->name('pages_about');
Route::get('/search' , 'SearchController@searchBy')->name('search');
Route::post('/search' , 'SearchController@searchBy')->name('search');


// Enquiry Controller
Route::post('enquire' , 'EnquiryController@enquire')->name('enquire');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
    'register' => false,
]);