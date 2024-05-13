<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisudaController;
use Illuminate\Support\Facades\Route;

Route::get('/503', function(){
    return abort(503);
})->name('503');

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::post('/login/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('wisuda')->group(function () {
    Route::get('/', [WisudaController::class, 'index'])->name('wisuda.index');
    Route::post('/show', [WisudaController::class, 'detail_peserta'])->name('wisuda.show');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    });
    Route::prefix('wisuda')->group(function () {
        Route::get('/peserta', [WisudaController::class, 'peserta'])->name('admin.wisuda.peserta');
        Route::post('/import', [WisudaController::class, 'import'])->name('admin.wisuda.import');
    });
});
