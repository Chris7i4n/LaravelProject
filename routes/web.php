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
Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');


    Route::prefix('registration')->group( function() {  
        Route::resource('violated', 'ViolatedController');

        Route::resource('violationdata', 'ViolationDataController')->except('create','store');
        Route::get('violationdata/create/{violated}','ViolationDataController@create')->name('violationdata.create');
        Route::post('violationdata/store/{violated}','ViolationDataController@store')->name('violationdata.store');

        Route::resource('violationagent', 'ViolationAgentController')->except('create','store');
        Route::get('violationagent/create/{violated}','ViolationAgentController@create')->name('violationagent.create');
        Route::post('violationagent/store/{violated}','ViolationAgentController@store')->name('violationagent.store');
    });


});

Route::get('/home', 'HomeController@index')->name('home');
