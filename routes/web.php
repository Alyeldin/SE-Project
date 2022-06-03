<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
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
Route::get('/product', function () {
    return view('product');
});
Route::get('/spareparts', function () {
    return view('spareparts');
});
Route::get('/oilchange', function () {
    return view('oilchange');
});
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
// Route::resource('/edit', UserController::class);
// Route::resource('/index', UserController::class);
// Route::resource('/layout', UserController::class);
// Route::resource('/show', UserController::class);



Route::get('/signup',[SignupController::class, 'signup']); 
