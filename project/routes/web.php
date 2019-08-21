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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'homecontroller@index')->name('home.index');

Route::get('/home/login', 'logincontroller@index')->name('login.index');
Route::post('/home/login', 'logincontroller@verify');

Route::get('/home/registration', 'registarcontroller@index')->name('registration.index');
Route::post('/home/registration', 'registarcontroller@signuppost');

Route::get('/home/allbooks', 'homecontroller@allbooks')->name('home.allbooks');

Route::get('/home/allusers', 'homecontroller@allusers')->name('home.allusers');

Route::get('/home/livesearchBooks', 'homecontroller@livesearchBooks')->name('home.livesearchBooks');

Route::get('/home/livesearchUsers', 'homecontroller@livesearchUsers')->name('home.livesearchUsers');