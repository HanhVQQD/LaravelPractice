<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentManagerController;
use App\Http\Controllers\PageController;



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


//Route::get('/add',StudentManagerController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/',[PageController::class,'getIndex']);

// Route::get('/', [ PageController::class, 'getProduct_type' ]);		

Route::get('/', [ PageController::class, 'getDetail_product' ]);			