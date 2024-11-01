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
        Schema::create('data_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tutorial');
            $table->string('kode_prodi');
            $table->string('nama_prodi');
            $table->string('kode_matakuliah');
            $table->string('nama_matakuliah');
            $table->string('kode_lokasi')->nullable();
            $table->string('nama_lokasi')->nullable();
            $table->string('kode_kabko')->nullable();
            $table->string('nama_kabko')->nullable();
            $table->string('biaya')->nullable();
            $table->string('status_aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tutorials');
    }
};
