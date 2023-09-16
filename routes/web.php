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
});

Route::view('login', 'auth/login')->name('login');
Route::view('view', 'view-blogs');

Route::controller(AuthController::class)->group(function(){
    Route::get('/register','view');
    Route::post('/register', 'store')->name("register");

    Route::post('/login', 'authenticate');
    Route::post('/logout', 'destroy');

});


Route::get('/profile/{username}', function($username){
    return view('profile', ['username' => $username]);
})->middleware('auth');

