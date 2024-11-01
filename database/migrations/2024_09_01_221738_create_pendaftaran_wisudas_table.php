<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran_wisudas', function (Blueprint $table) {
            $table->id();
            $table->string('masa_yudisium');
            $table->string('no_sk_rektor')->nullable();
            $table->string('mr_awal')->nullable();
            $table->string('mr_akhir')->nullable();
            $table->string('jenis_program')->nullable();
            $table->string('nim')->nullable();
            $table->string('nama')->nullable();
            $table->string('kabko')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('prodi')->nullable();
            $table->string('nik')->nullable();
            $table->string('tmp_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('ipk')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_kirim')->nullable();
            $table->text('bukti_pembayaran')->nullable();
            $table->string('tgl_upload_bukti')->nullable();
            $table->boolean('ikut_seminar')->default(0);
            $table->boolean('konfirmasi_lip')->default(0);
            $table->string('tgl_konfirmasi')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_wisudas');
    }
};
