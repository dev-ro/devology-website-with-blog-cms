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
});