<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/sample', [PageController::class, 'sample'])->name('sample');
Route::get('/table', [PageController::class, 'table'])->name('table');
Route::get('/datatable', [PageController::class, 'datatable'])->name('datatable');
Route::get('/404', [PageController::class, 'page404'])->name('404');
