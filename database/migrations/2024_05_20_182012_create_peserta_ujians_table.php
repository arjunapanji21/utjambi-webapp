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
        Schema::create('peserta_ujians', function (Blueprint $table) {
            $table->id();
            $table->string('kabko');
            $table->string('kode_tpu');
            $table->string('prodi');
            $table->string('nim');
            $table->string('nama_mhs');
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->string('telp')->nullable();
            $table->string('nama_tpu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_ujians');
    }
};
