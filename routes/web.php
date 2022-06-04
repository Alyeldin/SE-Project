<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SparepartsController;
use App\Http\Controllers\OilchangeController;
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
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/services', function () {
    return view('services');
}); 

Route::get('/product',[ProductController::class, 'index']); 
Route::get('/spareparts',[SparepartsController::class, 'index']); 
Route::get('/oilchange',[OilchangeController::class, 'index']); 

Route::get('/acc', function () {
    return view('acc');
});
Route::get('/servicess', function () {
    return view('servicess');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::resource("/Users", UserController::class);
Route::resource('/create', UserController::class);

Route::get('/signup',[SignupController::class, 'signup']); 
