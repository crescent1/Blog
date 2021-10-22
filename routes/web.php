<?php

use App\Http\Controllers\DownloadController;
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

/**
 * route menu user
 */
Route::middleware('auth')->group(function () {
    Route::get('/user', 'BUserController@index')->name('user.index');
    Route::get('/user/create', 'BUserController@create')->name('user.create');
    Route::post('/user/store', 'BUserController@store')->name('user.store');
    Route::get('/user/edit/{admin}', 'BUserController@edit')->name('user.edit');
    Route::post('/user/update', 'BUserController@update')->name('user.update');
    Route::post('/user/destroy/{user}', 'BUserController@destroy')->name('user.destroy');

    Route::get('download/', [DownloadController::class, 'download'])->name('download');
    Route::get('download1/', [DownloadController::class, 'download1'])->name('download1');
});
