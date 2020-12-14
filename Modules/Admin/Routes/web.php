<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin/')->middleware('auth')->group(function() {

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
        Route::post('/massDestroy' , 'TestimonialsController@massDestroy')->name('testimonial-mass-destroy');
    });

    // Blogs
    Route::prefix('blogs')->group(function(){
        Route::get('/' , 'BlogController@index')->name('blogs-index-list');
        Route::get('/create' , 'BlogController@create')->name('blogs-create');
        Route::get('/edit/{id}' , 'BlogController@edit')->name('blogs-edit');
        Route::post('/store' , 'BlogController@store')->name('blogs-store');
        Route::patch('/update/{id}' , 'BlogController@update')->name('blogs-update');
        Route::delete('/delete/{id}' , 'BlogController@destroy')->name('blogs-delete');
        Route::post('/massDestroy' , 'BlogController@massDestroy')->name('blogs-mass-destroy');

        // Categories
        Route::prefix('categories')->group(function(){
            Route::get('/' , 'BlogcategoriesController@index')->name('blogs-categories-index-list');
            Route::get('/create' , 'BlogcategoriesController@create')->name('blogs-categories-create');
            Route::get('/edit/{id}' , 'BlogcategoriesController@edit')->name('blogs-categories-edit');
            Route::post('/store' , 'BlogcategoriesController@store')->name('blogs-categories-store');
            Route::patch('/update/{id}' , 'BlogcategoriesController@update')->name('blogs-categories-update');
            Route::delete('/delete/{id}' , 'BlogcategoriesController@destroy')->name('blogs-categories-delete');
            Route::post('/massDestroy' , 'BlogcategoriesController@massDestroy')->name('blogs-categories-mass-destroy');
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
        Route::post('/massDestroy' , 'AdminTeamController@massDestroy')->name('teams-mass-destroy');
    });

    // Services
    Route::prefix('services')->group(function(){
        Route::get('/' , 'ServicesController@index')->name('services-index-list');
        Route::get('/create' , 'ServicesController@create')->name('services-create');
        Route::get('/edit/{id}' , 'ServicesController@edit')->name('services-edit');
        Route::post('/store' , 'ServicesController@store')->name('services-store');
        Route::patch('/update/{id}' , 'ServicesController@update')->name('services-update');
        Route::delete('/delete/{id}' , 'ServicesController@destroy')->name('services-delete');
        Route::post('/massDestroy' , 'ServicesController@massDestroy')->name('services-mass-destroy');
    });

    // Portfolio
    Route::prefix('portfolios')->group(function(){
        Route::get('/', 'PortfolioController@index')->name('portfolio-index-list');
        Route::get('/create' , 'PortfolioController@create')->name('portfolio-create');
        Route::get('/edit/{id}' , 'PortfolioController@edit')->name('portfolio-edit');
        Route::post('/store' , 'PortfolioController@store')->name('portfolio-store');
        Route::patch('/update/{id}' , 'PortfolioController@update')->name('portfolio-update');
        Route::delete('/delete/{id}' , 'PortfolioController@destroy')->name('portfolio-delete');
        Route::post('/massDestroy' , 'PortfolioController@massDestroy')->name('portfolios-mass-destroy');
    });

    // Enquiries
    Route::prefix('enquiries')->group(function(){
        Route::get('/' , 'AdminEnquiryController@index')->name('enquiry-lists-admin');
        Route::get('/respond/{id}/enquiry', 'AdminEnquiryController@show')->name('respond-enquiry-view');

        Route::post('/respond/{id}/enquiry', 'AdminEnquiryController@respond')->name('respond-enquiry-post');
    });

    // Upload for client side
    Route::post('/upload' , 'AdminController@xhrUpload')
        ->name('image-upload');
});