<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SsoController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/foods', function () {
    return view('foods');
})->middleware('auth');

Route::get('/login', [SsoController::class, 'redirectToAuth'])->name('login');
Route::get('/callback', [SsoController::class, 'handleCallback']);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout')->middleware('auth');