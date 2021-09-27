<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthModelController;
use App\Http\Middleware\determine_role;

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
    return view('login');
});
Route::get('/user', function () {
    return view('user_dashboard');
});
Route::get('/admin', function () {
    return view('admin_dashboard');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('sign_up', 'AuthModelController@store')->name('signup');
Route::post('login', 'AuthModelController@stores')->name('login')->middleware('determine_role');    