<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\VitalSignController;

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

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('dashboard')->group(function () {
    Route::resource('rol', RolController::class)->middleware('auth');
    Route::resource('user', UserController::class)->middleware('auth');
    Route::resource('treatment', TreatmentController::class)->middleware('auth');
    Route::resource('vitalSign', VitalSignController::class)->middleware('auth');

});