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
Route::get('/home', 'HomeController@index')->name('home.index');
Route::post('/home', 'HomeController@search1');

Route::get('/home/login', 'logincontroller@index')->name('login.index');
Route::post('/home/login', 'logincontroller@verify');

Route::get('/home/AfterLoginAdmin', 'HomeController@AfterLoginAdmin')->name('home.AfterLoginAdmin');

Route::get('/home/allbooksAdmin', 'HomeController@allbooksAdmin')->name('home.allbooksAdmin');

Route::get('/home/banncustomer', 'HomeController@banncustomer')->name('home.banncustomer');

Route::get('/home/registration', 'registarcontroller@index')->name('registration.index');
Route::post('/home/registration', 'registarcontroller@signuppost');

Route::get('/home/allbooks', 'HomeController@allbooks')->name('home.allbooks');

Route::get('/home/allusers', 'HomeController@allusers')->name('home.allusers');

Route::get('/home/categories/novel', 'HomeController@novel')->name('home.categories.novel');

Route::get('/home/categories/literature', 'HomeController@literature')->name('home.categories.literature');

Route::get('/home/categories/scifi', 'HomeController@scifi')->name('home.categories.scifi');

Route::get('/home/livesearchBooks', 'HomeController@livesearchBooks')->name('home.livesearchBooks');

Route::get('/home/livesearchUsers', 'HomeController@livesearchUsers')->name('home.livesearchUsers');


Route::get('/logout', 'logoutController@index');