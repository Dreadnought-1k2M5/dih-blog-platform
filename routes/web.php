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
    return view('view-blogs');
})->middleware(['prevent-back-history']);

/* user registration and authentication */
Route::controller(AuthController::class)->group(function(){
    Route::get('/register','view');
    Route::post('/register', 'store')->name("register");

    Route::post('/login', 'authenticate');
    Route::post('/logout', 'destroy');

})->middleware('prevent-back-history');

/* Email verification routes */
Route::view('/email/verify', 'verify-email')->middleware('auth')->name('verification.notice');

/* Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify'); */

//View pages that don't required authenticated users
Route::view('/login', 'auth/login')->middleware('guest')->name('login')->middleware('prevent-back-history');
Route::view('/forgot-password', 'auth.forgot-password')->middleware('guest')->name('reset.password')->middleware('prevent-back-history');

Route::view('view', 'view-blogs')->middleware('prevent-back-history');


// pages that require authenticated users
Route::get('/profile/{username}', function($username){
    return view('profile', ['username' => $username]);
})->middleware(['auth', 'prevent-back-history']);



