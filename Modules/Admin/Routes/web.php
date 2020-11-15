<?php
use Illuminate\Support\Facades\Route;

// Upload Controller 
use App\Http\Controllers\UploadController;

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

    // Blogs
    Route::prefix('blogs')->group(function(){
        Route::get('/' , 'BlogController@index')->name('blogs-index-list');
        Route::get('/create' , 'BlogController@create')->name('blogs-create');
        Route::get('/edit/{id}' , 'BlogController@edit')->name('blogs-edit');
        Route::post('/store' , 'BlogController@store')->name('blogs-store');
        Route::patch('/update/{id}' , 'BlogController@update')->name('blogs-update');
        Route::delete('/delete/{id}' , 'BlogController@destroy')->name('blogs-delete');

        // Categories
        Route::prefix('categories')->group(function(){
            Route::get('/' , 'BlogcategoriesController@index')->name('blogs-categories-index-list');
            Route::get('/create' , 'BlogcategoriesController@create')->name('blogs-categories-create');
            Route::get('/edit/{id}' , 'BlogcategoriesController@edit')->name('blogs-categories-edit');
            Route::post('/store' , 'BlogcategoriesController@store')->name('blogs-categories-store');
            Route::patch('/update/{id}' , 'BlogcategoriesController@update')->name('blogs-categories-update');
            Route::delete('/delete/{id}' , 'BlogcategoriesController@destroy')->name('blogs-categories-delete');
        });
    });

    // Teams
    Route::prefix('teams')->group(function(){
        Route::get('/' , 'AdminTeamController@index')->name('teams-index-lists');
        Route::get('/create' , 'AdminTeamController@create')->name('teams-create');
        Route::get('/edit/{id}' , 'AdminTeamController@edit')->name('teams-edit');
        Route::post('/store' , 'AdminTeamController@store')->name('teams-store');
        Route::patch('/update/{id}' , 'AdminTeamController@update')->name('teams-update');
        Route::delete('/delete/{id}' , 'AdminTeamController@destroy')->name('teams-delete');
    });

    // Services
    Route::prefix('services')->group(function(){
        Route::get('/' , 'ServicesController@index')->name('services-index-list');
        Route::get('/create' , 'ServicesController@create')->name('services-create');
        Route::get('/edit/{id}' , 'ServicesController@edit')->name('services-edit');
        Route::post('/store' , 'ServicesController@store')->name('services-store');
        Route::patch('/update/{id}' , 'ServicesController@update')->name('services-update');
        Route::delete('/delete/{id}' , 'ServicesController@destroy')->name('services-delete');
    });

    // Enquiries
    Route::prefix('enquiries')->group(function(){
        Route::get('/' , 'AdminEnquiryController@index')->name('enquiry-lists-admin');
    });

    // Upload for client side
    Route::post('/upload' , 'AdminController@xhrUpload')
        ->name('image-upload');
});