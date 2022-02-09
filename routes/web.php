<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PerjalnanControlle;
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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'user', 'middleware' => ['role:user']], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
    Route::resource('/perjalanan', PerjalnanControlle::class)->names('user.perjalanan');
    Route::get('/perjalanan/detail/1', [PerjalnanControlle::class, 'detail']);
});
