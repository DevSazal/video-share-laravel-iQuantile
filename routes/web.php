<?php

use Illuminate\Support\Facades\Route;
// call Controller
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin;

use App\Http\Controllers\DefaultController;

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
Route::get('/register',[UserController::class, 'registerPage']);
Route::post('/register',[UserController::class, 'registerUser'])->name('register');

Route::get('/login',[UserController::class, 'loginPage']);
Route::post('/login',[UserController::class, 'loginUser'])->name('login');

Route::get('/logout',[UserController::class, 'logout'])->name('logout');

Route::get('/',[DefaultController::class, 'index']);

// Protected Admin Area
Route::get('/dashboard',[Admin\DefaultController::class, 'main']);
Route::post('/dashboard/upload',[Admin\DefaultController::class, 'storeVideo'])->name('storeVideo');
