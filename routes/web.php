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

Route::get('/', 'MainController@main')->name('homepage') ;
Route::get('detail/{id}', 'MainController@detail')->name('detailpage') ;

Route::get('main/{key}','PageController@main')->name('mainpage');

Route::resource('staff','StaffController');// 7
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('payrolls','PayrollController');

Route::post('getstaff','PayrollController@getstaff')->name('getstaff');

Route::post('getastaff','PayrollController@getastaff')->name('getastaff');

Route::resource('posts','PostController');
