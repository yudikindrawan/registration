<?php

use App\Http\Controllers\detailController;
use App\Http\Controllers\IndexController;
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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/register-view', function () {
    return view('frontend.form-registration');
});

Route::get('/detail-view', [detailController::class, 'index']);
Route::get('/dashboard', [IndexController::class, 'index']);
Route::post('/approve/{id}', [IndexController::class, 'edit'])->name('approve-user');

Route::get('/login-view', function () {
    return view('frontend.login-form');
});
