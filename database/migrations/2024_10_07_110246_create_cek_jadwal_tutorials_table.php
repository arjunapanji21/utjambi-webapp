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
        Schema::create('cek_jadwal_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('masa');
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->string('kode_tutorial');
            $table->string('kode_matakuliah');
            $table->string('nama_matakuliah');
            $table->string('kode_tutor');
            $table->string('nama_tutor');
            $table->string('kode_kelas');
            $table->string('nama_kelas');
            $table->string('layanan');
            $table->string('upbjj');
            $table->string('lokasi');
            $table->string('kabko');
            $table->string('jadwal');
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_jadwal_tutorials');
    }
};
