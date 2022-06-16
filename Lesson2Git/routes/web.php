<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BladeController;
use App\Http\Controlles\HomeController;
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

// Route::get(
//     '/',
//     'App\Http\Controllers\UserController@getIndex'
// );

// Route::get('admin', function () {
//     return view('adminpage');
// });

// Route::get('admin',[AdminController::class,'index']);
// Route::post('admin',[AdminController::class,'addRoom']);


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('user', function () {
//         echo 'Users Management';
//     });
//     Route::get('product', function () {
//         echo 'Products Management';
//     });
// });

// Route::get(
//     '/sum',function () {
//         return view('sum');
//     }
// );

// Route::post('sum', 'App\Http\Controllers\UserController@sum');

// Route::get(
//     '/login ',function () {
//         return view('login');
//     }
// );

// Route::get('/signup',[Authentication::class,'signup']);
// Route::post('/signup',[Authentication::class,'displayInfor']);
	
// Route::get('/',[BladeController::class,'index']);
// Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
