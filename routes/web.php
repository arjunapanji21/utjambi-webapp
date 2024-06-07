<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMasterController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NumpangUjianController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WisudaController;
use Illuminate\Support\Facades\Route;

Route::get('/503', function(){
    return abort(503);
})->name('503');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/reset-password', [AuthController::class, 'reset_password'])->name('reset_password');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/content/{category}/{slug}', [PostController::class, 'show_post_detail'])->name('show_post_detail');

Route::prefix('profil')->group(function () {
    Route::get('/direktur', [HomepageController::class, 'direktur'])->name('profil.direktur');
    Route::get('/manajer-administrasi', [HomepageController::class, 'manajer_administrasi'])->name('profil.manajer_administrasi');
    Route::get('/manajer-marketing', [HomepageController::class, 'manajer_marketing'])->name('profil.manajer_marketing');
    Route::get('/manajer-pembelajaran', [HomepageController::class, 'manajer_pembelajaran'])->name('profil.manajer_pembelajaran');
    Route::get('/staf', [HomepageController::class, 'staf'])->name('profil.staf');
});

Route::prefix('wisuda')->group(function () {
    Route::get('/', [WisudaController::class, 'index'])->name('wisuda.index');
    Route::post('/show', [WisudaController::class, 'detail_peserta'])->name('wisuda.show');
    Route::get('/scan/seminar', [WisudaController::class, 'seminar_scan'])->name('wisuda.seminar_scan');
    Route::get('/scan/wisuda', [WisudaController::class, 'wisuda_scan'])->name('wisuda.wisuda_scan');
});

Route::prefix('form')->group(function () {
    Route::get('/numpang-ujian', [NumpangUjianController::class, 'form_numpang_ujian_1'])->name('form.numpang_ujian_1');
    Route::get('/numpang-ujian/ut-jambi', [NumpangUjianController::class, 'form_numpang_ujian_2'])->name('form.numpang_ujian_2');
    Route::get('/numpang-ujian/ut-lain', [NumpangUjianController::class, 'form_numpang_ujian_3'])->name('form.numpang_ujian_3');
    Route::get('/numpang-ujian/{nim}', [NumpangUjianController::class, 'status_numpang_ujian'])->name('status.numpang_ujian');
    Route::get('/numpang-ujian/{id}/surat-permohonan', [NumpangUjianController::class, 'surat_permohonan_numpang_ujian'])->name('surat.permohonan_numpang_ujian');
    Route::post('/numpang-ujian/ut-jambi/submit', [NumpangUjianController::class, 'submit_form_numpang_ujian'])->name('form.numpang_ujian.submit');
    Route::post('/numpang-ujian/ut-lain/submit', [NumpangUjianController::class, 'submit_form_numpang_ujian_dari_luar'])->name('form.numpang_ujian.submit.dari_luar');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    });

    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'show_all_post'])->name('admin.post.show_all_post');
        Route::get('/new', [PostController::class, 'create_new_post'])->name('admin.post.create_new_post');
        Route::post('/new/draft', [PostController::class, 'post_to_draft'])->name('admin.post.draft');
        Route::post('/new/publish', [PostController::class, 'post_to_publish'])->name('admin.post.publish');
        Route::get('/category', [PostController::class, 'show_all_category'])->name('admin.post.show_all_category');
        Route::post('/category/new', [PostController::class, 'add_new_category'])->name('admin.post.add_new_category');
    });

    Route::prefix('numpang-ujian')->group(function () {
        Route::get('/matakuliah', [NumpangUjianController::class, 'matakuliah'])->name('admin.numpang_ujian.matakuliah');
        Route::get('/wilayah', [NumpangUjianController::class, 'wilayah'])->name('admin.numpang_ujian.wilayah');
        Route::get('/peserta', [NumpangUjianController::class, 'peserta'])->name('admin.numpang_ujian.peserta');
        Route::get('/data-nu', [NumpangUjianController::class, 'data_numpang_ujian'])->name('admin.numpang_ujian.data_nu');
        Route::post('/data-nu/update', [NumpangUjianController::class, 'update_data_numpang_ujian'])->name('admin.numpang_ujian.data_nu.update');
        Route::post('/data-nu/delete', [NumpangUjianController::class, 'hapus_data_numpang_ujian'])->name('admin.numpang_ujian.data_nu.hapus');
        Route::post('/matakuliah/import', [NumpangUjianController::class, 'matakuliah_import'])->name('admin.numpang_ujian.matakuliah.import');
        Route::post('/wilayah-ujian/import', [NumpangUjianController::class, 'wilayah_ujian_import'])->name('admin.numpang_ujian.wilayah_ujian.import');
        Route::post('/peserta-ujian/import', [NumpangUjianController::class, 'peserta_ujian_import'])->name('admin.numpang_ujian.peserta_ujian.import');
    });

    Route::prefix('wisuda')->group(function () {
        Route::get('/peserta', [WisudaController::class, 'peserta'])->name('admin.wisuda.peserta');
        Route::post('/import', [WisudaController::class, 'import'])->name('admin.wisuda.import');
    });
});
