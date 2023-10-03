<?php


use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\LoginController;
use \App\Http\Controllers\Backend\DashboardController;

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



// Login Module
Route::get('/signup', [LoginController::class, 'SignUpPage']);
Route::get('/signin', [LoginController::class, 'SignInPage']);

// Dashaboard
Route::get('/dashboard', [DashboardController::class, 'dashPage']);











