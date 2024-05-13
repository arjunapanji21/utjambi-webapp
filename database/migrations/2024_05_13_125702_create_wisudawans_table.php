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
        Schema::create('wisudawans', function (Blueprint $table) {
            $table->id();
            $table->string('masa');
            $table->string('nim');
            $table->string('nama');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('kabko');
            $table->string('no_bangku');
            $table->string('tgl_seminar');
            $table->string('waktu_seminar');
            $table->string('tgl_wisuda');
            $table->string('waktu_wisuda');
            $table->string('absen_seminar')->nullable();
            $table->string('absen_wisuda')->nullable();
            $table->string('lokasi');
            $table->string('gmap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisudawans');
    }
};
