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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * Login / Logout
 */
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@processLogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/', 'BDashboardController@index' )->name('dashboard');
    // Route::post('/', 'DashboardController@index');
});
