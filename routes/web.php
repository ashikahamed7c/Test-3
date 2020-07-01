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


/*-----------------FrontEnd Route -----------------*/

Route::get('/', [
    'uses' => 'AqualinkController@about',
    'as'   => '/'
]);

Route::get('/contact', [
    'uses' => 'AqualinkController@contact',
    'as'   => 'contact-us'
]);

Route::get('/sensometer', [
    'uses' => 'AqualinkController@sensoMeter',
    'as'   => 'senso-meter'
]);

Route::get('/smart', [
    'uses' => 'AqualinkController@smart',
    'as'   => 'smart-attendance'
]);

/*------------BackEnd Route --------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






