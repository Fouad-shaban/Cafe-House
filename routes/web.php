<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Auth::routes();
        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');


        Route::get('/special', function () {
            return view('special');
        })->name("todayspecial");

        Route::get('/menu', function () {
            return view('menu');
        })->name("menu");

        Route::get('/contact', function () {
            return view('contact');
        })->name("contact");
        Route::group(["middleware"=>"CheckAdmin"],function(){
            Route::get('/home', 'HomeController@index')->name('home');;

            // crud opration MENU
            Route::get('/menu/show/{id}','MenuController@show')->name('menu.show');
            Route::get('/menu/delete/{id}','MenuController@delete')->name('menu.delete');
            Route::get('/menu/create','MenuController@create')->name('menu.create');
            Route::post('/menu/store','MenuController@store')->name('menu.store');
            Route::get('/menu/edit/{id}','MenuController@edit')->name('menu.edit');
            Route::post('/menu/update','MenuController@update')->name('menu.update');

            // crud opration todayspecial
            Route::get('/todayspecial/show/{id}','TodayspecialController@show')->name('todayspecial.show');
            Route::get('/todayspecial/delete/{id}','TodayspecialController@delete')->name('todayspecial.delete');
            Route::get('/todayspecial/create','TodayspecialController@create')->name('todayspecial.create');
            Route::post('/todayspecial/store','TodayspecialController@store')->name('todayspecial.store');
            Route::get('/todayspecial/edit/{id}','TodayspecialController@edit')->name('todayspecial.edit');
            Route::post('/todayspecial/update','TodayspecialController@update')->name('todayspecial.update');

        });
        });
