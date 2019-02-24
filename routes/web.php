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

Route::middleware(['web', 'localized'])
    ->prefix(request()->segment(1))
    ->group(function () {
        
    App::setLocale(request()->segment(1));   
    Route::get('/','Front\HomeController@home_page')->name('home');
    Route::get('/page/{slug}','Front\HomeController@pages_show')->name('pages.show');
    Route::get('/test','Front\HomeController@test');
    
    Route::get('/blog/{post}/{slug}','Front\HomeController@blog_show')->name('blog.show');
    Route::get('/blog','Front\HomeController@blog_index')->name('blog.index');
    
    Route::get('/doctor','Front\HomeController@doctor_index')->name('doctor.index');
    Route::get('/doctor/{doctor}/{slug?}','Front\HomeController@doctor_show')->name('doctor.show');
    Route::get('/service/{category}/{slug?}/doctor','Front\HomeController@doctor_category_index')->name('doctor.category.show');
    
    Route::get('/service/{category}/{slug}','Front\HomeController@category_show')->name('category.show');
    Route::post('/service/request/store','Front\HomeController@category_request')->name('category.request');
    
});


Route::name('locale.switch')->get('switch/{locale}', 'Front\HomeController@local_switch');

Route::group(['prefix' => 'myadmin'], function () {
    Voyager::routes();
});
