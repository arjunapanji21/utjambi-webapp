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
        Schema::create('data_peserta_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('upbjj');
            $table->string('kabko')->nullable();
            $table->string('pos')->nullable();
            $table->string('pokjar')->nullable();
            $table->string('wilayah_ujian')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('prodi')->nullable();
            $table->string('agama')->nullable();
            $table->string('sipas')->nullable();
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->string('masa')->nullable();
            $table->string('semester')->nullable();
            $table->string('MRI')->nullable();
            $table->string('MRA')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->string('penjadwalan_tutorial_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_peserta_tutorials');
    }
};
