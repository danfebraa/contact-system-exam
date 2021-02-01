<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthenticationController;
use \App\Http\Controllers\ContactController;
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

Route::get("/registration", [AuthenticationController::class, 'registration']);
Route::post("/register", [AuthenticationController::class, 'doRegistration']);

Route::get("/login",[AuthenticationController::class, 'login']);
Route::post("/login",[AuthenticationController::class, 'doLogin']);


Route::resource('contacts', ContactController::class);
