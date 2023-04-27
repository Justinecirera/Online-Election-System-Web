<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// LOGIN/REGISTER/ADMIN/MAIN PAGE
// -------------------------- LOGIN --------------------------------//
Route::get('/loginform', [AuthController::class, 'login'])->name('login'); //second 'login' -> function
Route::post('/loginform', [AuthController::class, 'loginPost'])->name('login.post');

// -------------------------- REGISTER --------------------------------//
Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

// -------------------------- LOG-OUT --------------------------------//
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');