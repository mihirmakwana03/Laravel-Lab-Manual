<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

################################################
//Seventeen
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);

####################################################
//Fifteen
// Route::get('/login', [AuthController::class, 'showLoginForm']);
// Route::post('/login', [AuthController::class, 'login']);






#######################################################
// Route::get('/login/{uname}/{pass}', function ($uname, $pass) {
//     return view('six.home'); 
// });

// Route::middleware([AuthMiddleware::class])->group(function () {

//     Route::get('/dashboard', function () {
//         return view('six.dashboard');
//     })->name('dashboard');

//     Route::get('/profile', function () {
//         return view('six.profile');
//     })->name('profile');

//     Route::get('/settings', function () {
//         return view('six.settings');
//     })->name('settings');

// });
