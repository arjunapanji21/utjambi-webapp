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
        Schema::create('w_t_k_u_s', function (Blueprint $table) {
            $table->id();
            $table->string('masa');
            $table->string('nim');
            $table->string('nama');
            $table->string('kelas');
            $table->string('tgl_wt');
            $table->string('lokasi_wt');
            $table->string('gmap_wt')->nullable();
            $table->string('zoom_wt')->nullable();
            $table->string('hadir_wt')->nullable();
            $table->string('tgl_ku');
            $table->string('lokasi_ku');
            $table->string('gmap_ku')->nullable();
            $table->string('zoom_ku')->nullable();
            $table->string('hadir_ku')->nullable();
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
        Schema::dropIfExists('w_t_k_u_s');
    }
};
