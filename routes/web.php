<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMasterController;
use App\Http\Controllers\NumpangUjianController;
use App\Http\Controllers\WisudaController;
use Illuminate\Support\Facades\Route;

Route::get('/503', function(){
    return abort(503);
})->name('503');

Route::get('/', function () {
    return view('homepage.index');
})->name('homepage');

Route::post('/login/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('wisuda')->group(function () {
    Route::get('/', [WisudaController::class, 'index'])->name('wisuda.index');
    Route::post('/show', [WisudaController::class, 'detail_peserta'])->name('wisuda.show');
    Route::get('/scan/seminar', [WisudaController::class, 'seminar_scan'])->name('wisuda.seminar_scan');
    Route::get('/scan/wisuda', [WisudaController::class, 'wisuda_scan'])->name('wisuda.wisuda_scan');
});

Route::prefix('form')->group(function () {
    Route::get('/numpang-ujian', [NumpangUjianController::class, 'form_numpang_ujian'])->name('form.numpang_ujian');
    Route::get('/numpang-ujian/{nim}', [NumpangUjianController::class, 'status_numpang_ujian'])->name('status.numpang_ujian');
    Route::post('/numpang-ujian/submit', [NumpangUjianController::class, 'submit_form_numpang_ujian'])->name('form.numpang_ujian.submit');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    });

    Route::prefix('numpang-ujian')->group(function () {
        Route::get('/matakuliah', [NumpangUjianController::class, 'matakuliah'])->name('admin.aplikasi.numpang_ujian.matakuliah');
        Route::get('/data-nu', [NumpangUjianController::class, 'data_numpang_ujian'])->name('admin.numpang_ujian.data_nu');
        Route::post('/matakuliah/import', [NumpangUjianController::class, 'matakuliah_import'])->name('admin.aplikasi.numpang_ujian.matakuliah.import');
        Route::post('/wilayah-ujian/import', [NumpangUjianController::class, 'wilayah_ujian_import'])->name('admin.numpang_ujian.wilayah_ujian.import');
        Route::post('/peserta-ujian/import', [NumpangUjianController::class, 'peserta_ujian_import'])->name('admin.numpang_ujian.peserta_ujian.import');
    });

    Route::prefix('wisuda')->group(function () {
        Route::get('/peserta', [WisudaController::class, 'peserta'])->name('admin.wisuda.peserta');
        Route::post('/import', [WisudaController::class, 'import'])->name('admin.wisuda.import');
    });
});
