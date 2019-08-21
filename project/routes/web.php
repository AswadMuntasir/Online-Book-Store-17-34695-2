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