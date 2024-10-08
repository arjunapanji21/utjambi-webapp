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
        Schema::create('tambah_naskah_matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_wilayah');
            $table->string('nama_wilayah');
            $table->string('kode_matakuliah');
            $table->string('nama_matakuliah');
            $table->string('kode_waktu_ujian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_naskah_matakuliahs');
    }
};
