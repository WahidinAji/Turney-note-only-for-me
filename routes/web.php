<?php

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

// Route::middleware(['auth:player'])->group(function () {
Route::get('/', function () {
    return view('player.index');
});
// });
Route::group(['auth', 'players'], function () {
    // Route::get('/anu', 'INI CONTOH');
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::namespace('Player')->group(function () {
        Route::get('login', 'PlayerAuthController@index');
        Route::post('dashboard', 'PlayerAuthController@postLogin')->name('post.login');
        Route::get('register', 'PlayerAuthController@register');
        Route::post('post-register', 'PlayerAuthController@postRegister');
        // Route::get('dashboard', 'PlayerAuthController@dashboard');
        Route::get('logout', 'PlayerAuthController@logout');
    });
});
