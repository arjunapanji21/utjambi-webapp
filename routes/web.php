<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LPKBJJController;
use App\Http\Controllers\NumpangUjianController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\WebSettingController;
use App\Http\Controllers\WisudaController;
use App\Http\Middleware\Maintenance;
use App\Models\WebSetting;
use Illuminate\Support\Facades\Route;

// Route API
Route::prefix('api')->group(function () {
    Route::get('post', [APIController::class, 'get_post']);
    Route::get('slug', [APIController::class, 'get_slug']);
});
// End of Route API

Route::get('/503', function () {
    return abort(503);
})->name('503');

Route::get('/maintenance', function () {
    $until = date('m/d/Y', strtotime(WebSetting::find(1)->updated_at)) . " 06:00 PM";
    $props = [
        'title' => 'Web Under Maintenance | UT Jambi',
        'until' => $until,
    ];
    return view('maintenance', $props);
})->name('maintenance');

Route::get('/signage', function () {
    $props = [
        'title' => 'Digital Signage | UT Jambi',
    ];
    return view('signage', $props);
})->name('signage');

Route::get('/d/{folder}/{nama_file}', [HomepageController::class, 'download_file'])->name('download_file');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/reset-password', [AuthController::class, 'reset_password'])->name('reset_password');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([Maintenance::class])->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/blog', [HomepageController::class, 'blog'])->name('blog');
    Route::get('/content/{category}/{slug}', [PostController::class, 'show_post_detail'])->name('show_post_detail');

    Route::prefix('profil')->group(function () {
        Route::get('/direktur', [HomepageController::class, 'profil_direktur'])->name('profil.direktur');
        Route::get('/pimpinan-staf', [HomepageController::class, 'pimpinan_staf'])->name('profil.staf');
        Route::get('/visi-misi', [HomepageController::class, 'visi_misi'])->name('profil.visi_misi');
    });

    Route::prefix('mahasiswa')->group(function () {
        Route::get('/pembayaran-spp', [HomepageController::class, 'pembayaran_spp'])->name('mahasiswa.pembayaran_spp');
        Route::get('/ujian', [HomepageController::class, 'ujian'])->name('mahasiswa.ujian');
        Route::get('/ujian/numpang-utm', [HomepageController::class, 'numpang_utm'])->name('mahasiswa.numpang_utm');
        Route::post('/ujian/numpang-utm/submit', [HomepageController::class, 'submit_numpang_utm'])->name('mahasiswa.submit_numpang_utm');
    });

    Route::prefix('kegiatan')->group(function () {
        Route::get('/osmb-pkbjj', [HomepageController::class, 'osmb_pkbjj'])->name('kegiatan.osmb');
        Route::get('/osmb-pkbjj/show', [HomepageController::class, 'osmb_pkbjj_show'])->name('kegiatan.osmb.show');
        Route::post('/osmb-pkbjj/{id}/konfirmasi', [HomepageController::class, 'osmb_pkbjj_konfirmasi'])->name('kegiatan.osmb.konfirmasi');
        Route::get('/wt-ku', [HomepageController::class, 'wt_ku'])->name('kegiatan.wt_ku');
        Route::get('/jadwal/perkuliahan', [HomepageController::class, 'jadwal_perkuliahan'])->name('kegiatan.jadwal_perkuliahan');
        Route::get('/jadwal/perkuliahan/{kode_kelas}/pemberkasan', [HomepageController::class, 'download_pemberkasan'])->name('kegiatan.download_pemberkasan');
        Route::prefix('wisuda')->group(function () {
            Route::get('/', [WisudaController::class, 'index'])->name('kegiatan.wisuda');
            Route::get('/pendaftaran', [WisudaController::class, 'pendaftaran_wisuda'])->name('kegiatan.wisuda.pendaftaran');
            Route::post('/pendaftaran/upload-bukti-bayar', [WisudaController::class, 'upload_bukti_bayar_wisuda'])->name('kegiatan.wisuda.pendaftaran.upload_bukti_bayar_wisuda');
            Route::post('/pendaftaran/tolak-bukti-bayar', [WisudaController::class, 'tolak_bukti_bayar_wisuda'])->name('kegiatan.wisuda.pendaftaran.tolak_bukti_bayar_wisuda');
            Route::get('/pendaftaran/konfirmasi/{id}', [WisudaController::class, 'konfirmasi_pendaftaran_wisuda'])->name('kegiatan.wisuda.pendaftaran.konfirmasi');
            Route::get('/konfirmasi-kehadiran', [WisudaController::class, 'konfirmasi_kehadiran'])->name('kegiatan.wisuda.konfirmasi_kehadiran');
            Route::post('/konfirmasi-kehadiran/submit', [WisudaController::class, 'submit_konfirmasi_kehadiran'])->name('kegiatan.wisuda.submit_konfirmasi_kehadiran');
            Route::get('/cari-data', [WisudaController::class, 'cari_data_wisudawan'])->name('wisuda.cari_data_wisudawan');
            Route::get('/cari-data/show', [WisudaController::class, 'detail_peserta'])->name('wisuda.show');
            Route::get('/scan/seminar', [WisudaController::class, 'seminar_scan'])->name('wisuda.seminar_scan');
            Route::get('/scan/wisuda', [WisudaController::class, 'wisuda_scan'])->name('wisuda.wisuda_scan');
        });
    });


    Route::prefix('form')->group(function () {
        Route::get('/numpang-ujian/{nim}', [NumpangUjianController::class, 'status_numpang_ujian'])->name('status.numpang_ujian');
        Route::get('/numpang-ujian/{id}/surat-permohonan', [NumpangUjianController::class, 'surat_permohonan_numpang_ujian'])->name('surat.permohonan_numpang_ujian');
        Route::get('/numpang-ujian/{id}/surat-permohonan/panutan', [NumpangUjianController::class, 'surat_permohonan_numpang_ujian_panutan'])->name('surat.permohonan_numpang_ujian_panutan');
        Route::get('/numpang-ujian/surat-permohonan/panutan/batch', [NumpangUjianController::class, 'surat_permohonan_numpang_ujian_panutan_batch'])->name('surat.permohonan_numpang_ujian_panutan_batch');
    });
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    });
    Route::prefix('setting')->group(function () {
        Route::get('/', [WebSettingController::class, 'index'])->name('admin.setting');
        Route::post('/update', [WebSettingController::class, 'update'])->name('admin.setting.update');
    });

    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'show_all_post'])->name('admin.post.all');
        Route::get('/{id}/edit', [PostController::class, 'edit_post'])->name('admin.post.edit');
        Route::post('/{id}/update', [PostController::class, 'update_post'])->name('admin.post.update');
        Route::get('/{id}/delete', [PostController::class, 'delete_post'])->name('admin.post.delete');
        Route::get('/new', [PostController::class, 'create_new_post'])->name('admin.post.new');
        Route::post('/new/save', [PostController::class, 'save_new_post'])->name('admin.post.save');
        Route::get('/category', [PostController::class, 'show_all_category'])->name('admin.post.category.all');
        Route::post('/category/new', [PostController::class, 'add_new_category'])->name('admin.post.category.new');
        Route::post('/category/{id}/update', [PostController::class, 'update_category'])->name('admin.post.category.update');
        Route::get('/category/{id}/delete', [PostController::class, 'delete_category'])->name('admin.post.category.delete');
    });

    Route::prefix('lpkbjj')->group(function () {
        Route::get('/osmb-pkbjj', [LPKBJJController::class, 'osmb_pkbjj'])->name('admin.lpkbjj.osmb_pkbjj');
        Route::post('/osmb-pkbjj/import', [LPKBJJController::class, 'osmb_pkbjj_import'])->name('admin.lpkbjj.osmb_pkbjj_import');
        Route::get('/wt-ku', [LPKBJJController::class, 'wt_ku'])->name('admin.lpkbjj.wt_ku');
        Route::post('/wt-ku/import', [LPKBJJController::class, 'wt_ku_import'])->name('admin.lpkbjj.wt_ku_import');
    });

    Route::prefix('tutorial')->group(function () {
        Route::get('/penjadwalan/tutorial', [TutorialController::class, 'penjadwalan_tutorial'])->name('admin.ttm.penjadwalan_tutorial');
        Route::get('/penjadwalan/tutorial/{id}/detail', [TutorialController::class, 'penjadwalan_tutorial_detail'])->name('admin.ttm.penjadwalan_tutorial_detail');
        Route::get('/penjadwalan/tutorial/{id}/delete', [TutorialController::class, 'penjadwalan_tutorial_delete'])->name('admin.ttm.penjadwalan_tutorial_delete');
        Route::post('/penjadwalan/tutorial/import', [TutorialController::class, 'penjadwalan_tutorial_import'])->name('admin.ttm.penjadwalan_tutorial_import');
        Route::get('/penjadwalan/tutorial/cek', [TutorialController::class, 'cek_jadwal_tutorial'])->name('admin.ttm.cek_jadwal_tutorial');
        Route::post('/penjadwalan/tutorial/cek/import', [TutorialController::class, 'cek_jadwal_tutorial_import'])->name('admin.ttm.cek_jadwal_tutorial_import');
        Route::get('/penjadwalan/tutorial/export/{penjadwalan_tutorial_id}', [TutorialController::class, 'penjadwalan_kelas_export'])->name('admin.ttm.penjadwalan_tutorial_export');
        Route::get('/penjadwalan/tutorial/export', [TutorialController::class, 'penjadwalan_tutorial_export'])->name('admin.ttm.all_penjadwalan_tutorial_export');
        Route::post('/penjadwalan/tutorial/edit/info', [TutorialController::class, 'penjadwalan_tutorial_edit_info'])->name('admin.ttm.penjadwalan_tutorial_edit_info');
        Route::post('/penjadwalan/tutorial/edit/peserta', [TutorialController::class, 'penjadwalan_tutorial_edit_peserta'])->name('admin.ttm.penjadwalan_tutorial_edit_peserta');
        Route::get('/penjadwalan/kelas', [TutorialController::class, 'penjadwalan_kelas'])->name('admin.ttm.penjadwalan_kelas');
        Route::post('/penjadwalan/kelas/create', [TutorialController::class, 'penjadwalan_kelas_create'])->name('admin.ttm.penjadwalan_kelas_create');
        Route::post('/penjadwalan/kelas/reset', [TutorialController::class, 'penjadwalan_kelas_reset'])->name('admin.ttm.penjadwalan_kelas_reset');
        Route::get('/data/tutor', [TutorialController::class, 'data_tutor'])->name('admin.ttm.data_tutor');
        Route::post('/data/tutor/import', [TutorialController::class, 'data_tutor_import'])->name('admin.ttm.data_tutor_import');
        Route::get('/data/jadwal', [TutorialController::class, 'data_jadwal'])->name('admin.ttm.data_jadwal');
        Route::post('/data/jadwal/import', [TutorialController::class, 'data_jadwal_import'])->name('admin.ttm.data_jadwal_import');
        Route::get('/data/kelas', [TutorialController::class, 'data_kelas'])->name('admin.ttm.data_kelas');
        Route::post('/data/kelas/import', [TutorialController::class, 'data_kelas_import'])->name('admin.ttm.data_kelas_import');
        Route::get('/data/lokasi', [TutorialController::class, 'data_lokasi'])->name('admin.ttm.data_lokasi');
        Route::post('/data/lokasi/import', [TutorialController::class, 'data_lokasi_import'])->name('admin.ttm.data_lokasi_import');
        Route::get('/data/peserta', [TutorialController::class, 'data_peserta'])->name('admin.ttm.data_peserta');
        Route::post('/data/peserta/import', [TutorialController::class, 'data_peserta_import'])->name('admin.ttm.data_peserta_import');
        Route::get('/data/tutorial', [TutorialController::class, 'data_tutorial'])->name('admin.ttm.data_tutorial');
        Route::post('/data/tutorial/import', [TutorialController::class, 'data_tutorial_import'])->name('admin.ttm.data_tutorial_import');
        Route::get('/data/peserta', [TutorialController::class, 'data_peserta'])->name('admin.ttm.data_peserta');
        Route::post('/data/peserta/import', [TutorialController::class, 'data_peserta_import'])->name('admin.ttm.data_peserta_import');
    });

    Route::prefix('numpang-ujian')->group(function () {
        Route::get('/matakuliah', [NumpangUjianController::class, 'matakuliah'])->name('admin.numpang_ujian.matakuliah');
        Route::get('/wilayah', [NumpangUjianController::class, 'wilayah'])->name('admin.numpang_ujian.wilayah');
        Route::get('/data-nu', [NumpangUjianController::class, 'data_numpang_ujian'])->name('admin.numpang_ujian.data_nu');
        Route::get('/data-nu/export', [NumpangUjianController::class, 'data_numpang_ujian_export'])->name('admin.numpang_ujian.data_nu.export');
        Route::get('/data-nu/matakuliah/export', [NumpangUjianController::class, 'matakuliah_numpang_ujian_export'])->name('admin.numpang_ujian.data_nu.matakuliah.export');
        Route::post('/data-nu/batch/update', [NumpangUjianController::class, 'batch_ubah_status'])->name('admin.numpang_ujian.data_nu.batch_ubah_status');
        Route::post('/data-nu/update', [NumpangUjianController::class, 'update_data_numpang_ujian'])->name('admin.numpang_ujian.data_nu.update');
        Route::post('/data-nu/delete', [NumpangUjianController::class, 'hapus_data_numpang_ujian'])->name('admin.numpang_ujian.data_nu.hapus');
        Route::get('/surat-pengantar', [NumpangUjianController::class, 'surat_pengantar'])->name('admin.numpang_ujian.surat_pengantar');
        Route::post('/surat-pengantar/upload', [NumpangUjianController::class, 'surat_pengantar_upload'])->name('admin.numpang_ujian.surat_pengantar.upload');
        Route::post('/matakuliah/import', [NumpangUjianController::class, 'matakuliah_import'])->name('admin.numpang_ujian.matakuliah.import');
        Route::post('/wilayah-ujian/import', [NumpangUjianController::class, 'wilayah_ujian_import'])->name('admin.numpang_ujian.wilayah_ujian.import');
        Route::post('/wilayah-ujian/update', [NumpangUjianController::class, 'wilayah_ujian_update'])->name('admin.numpang_ujian.wilayah_ujian.update');
    });

    Route::prefix('wisuda')->group(function () {
        Route::get('/pendaftaran', [WisudaController::class, 'pendaftaran'])->name('admin.wisuda.pendaftaran');
        Route::post('/pendaftaran/import', [WisudaController::class, 'import_calon_wisuda'])->name('admin.wisuda.pendaftaran.import');
        Route::get('/pendaftaran/export', [WisudaController::class, 'export_pendaftaran'])->name('admin.wisuda.pendaftaran.export');
        Route::get('/kehadiran', [WisudaController::class, 'kehadiran'])->name('admin.wisuda.kehadiran');
        Route::post('/kehadiran/import', [WisudaController::class, 'import_kehadiran_wisuda'])->name('admin.wisuda.kehadiran.import');
        Route::get('/kehadiran/export', [WisudaController::class, 'export_kehadiran_wisuda'])->name('admin.wisuda.kehadiran.export');
    });
});
