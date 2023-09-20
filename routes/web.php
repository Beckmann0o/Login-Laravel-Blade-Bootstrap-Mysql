<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//VISTAS
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/vista/register', function () {
    return view('auth.register');
});

Route::get('/vista/login', function () {
    return view('auth.login');
});



//SOLICITUD REGISTRO
Route::post('/register',[RegisterController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/vista/profile',[UserController::class, 'profile']);
    Route::get('/vista/details',[UserController::class, 'details']);
});





