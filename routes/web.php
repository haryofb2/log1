<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/logout_new','HomeController@logoutnew')->name('logot');

// Route::get('/member','MemberController@index');

// Route::post('/member/store','MemberController@store')->name('member.store');

// Route::get('/hello','MasterController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin', 'MasterController@index');
Route::get('/user', 'MemberController@index');
