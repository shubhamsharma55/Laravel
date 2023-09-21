<?php

use App\Http\Controllers\AuthController\AuthController;
use App\Http\Controllers\Controller;
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


Route::get('/', [Controller::class, 'Home'])
    ->name('Home_FM')
    ->middleware('redirect.authenticated');

Route::middleware(['check.auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('Dashboard_FM');
});
// AJAX REQUEST ROUTES
Route::post('/login', [AuthController::class, 'login'])->name('Login_FM');
// AJAX REQUEST ROUTES
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
