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
        Schema::create('numpang_ujians', function (Blueprint $table) {
            $table->id();
            $table->string("nim");
            $table->string("nama");
            $table->string("prodi");
            $table->string("ut_daerah_asal");
            $table->string("ut_daerah_tujuan");
            $table->string("wilayah_ujian_asal");
            $table->string("wilayah_ujian_tujuan");
            $table->string("tgl_pindah_lokasi");
            $table->string("matakuliah");
            $table->string("skema");
            $table->string("alasan");
            $table->string("no_wa");
            $table->string("ttd")->nullable();
            $table->string("dokumen_pendukung_alasan")->nullable();
            $table->string("no_surat_permohonan")->nullable();
            $table->string("surat_pengantar")->nullable();
            $table->enum("status", ["Antrian", "Diproses", "Diterima", "Ditolak"]);
            $table->string("keterangan")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numpang_ujians');
    }
};
