<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinasLuarController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::prefix('dinas-luar')->group(function () {
    Route::get('/', [DinasLuarController::class, 'index'])->name('dinas');
    Route::post('/create', [DinasLuarController::class, 'store'])->name('store.dinas');
    Route::get('/edit/{id}', [DinasLuarController::class, 'edit'])->name('edit.dinas');
    Route::put('/update/{id}', [DinasLuarController::class, 'update'])->name('update.dinas');
    Route::delete('/delete/{id}', [DinasLuarController::class, 'destroy'])->name('destroy.dinas');
});
