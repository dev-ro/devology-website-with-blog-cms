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

Route::prefix('admin/')->group(function() {
    Route::get('/' , 'AdminController@redirectToLogin');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard-home');  
    
    // Settings
    Route::prefix('settings')->group(function() {
        Route::get('/company-settings' , 'CompanySettingsController@index')->name('company-settings');
        Route::put('/company-settings' , 'CompanySettingsController@update')->name('company-settings-post-method-update');
    });

    // Testimonials
    Route::prefix('testimonials')->group(function(){
        Route::get('/' , 'TestimonialsController@index')->name('testimonials-index');
        Route::get('/create' , 'TestimonialsController@create')->name('testimonials-create');
        Route::post('/store' , 'TestimonialsController@store')->name('testimonials-store');
        Route::get('/edit/{id}' , 'TestimonialsController@edit')->name('testimonials-edit');
        Route::patch('/update/{id}' , 'TestimonialsController@update')->name('testimonials-update');
        Route::delete('/delete/{id}' , 'TestimonialsController@destroy')->name('testimonials-delete');
    });
});