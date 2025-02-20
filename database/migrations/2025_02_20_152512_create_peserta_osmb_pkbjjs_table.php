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
        Schema::create('peserta_osmb_pkbjjs', function (Blueprint $table) {
            $table->id();
            $table->string('masa');
            $table->string('batch')->nullable();
            $table->string('nim');
            $table->string('nama');
            $table->string('kelas');
            $table->string('tgl_osmb');
            $table->string('lokasi_osmb');
            $table->string('gmap_osmb')->nullable();
            $table->string('zoom_osmb')->nullable();
            $table->string('hadir_osmb')->nullable();
            $table->string('tgl_pkbjj');
            $table->string('lokasi_pkbjj');
            $table->string('gmap_pkbjj')->nullable();
            $table->string('zoom_pkbjj')->nullable();
            $table->string('hadir_pkbjj')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('prodi')->nullable();
            $table->string('telp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_osmb_pkbjjs');
    }
};
