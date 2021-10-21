<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResumeController;
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

Route::group(['as' => 'page-'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/sample', [PageController::class, 'sample'])->name('sample');
    Route::get('/table', [PageController::class, 'table'])->name('table');
    Route::get('/datatable', [PageController::class, 'datatable'])->name('datatable');
    Route::get('/404', [PageController::class, 'page404'])->name('404');

    Route::group(['as' => 'resume-', 'prefix' => 'resume'], function () {
        Route::get('/', [ResumeController::class, 'index'])->name('index');
    });

});

Route::get('/login', [AuthController::class, 'login'])->name('login');
