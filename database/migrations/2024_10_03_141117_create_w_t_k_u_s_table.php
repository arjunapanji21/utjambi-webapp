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
            $table->string('lokasi');
            $table->string('link_gmap_lokasi');
            $table->string('tanggal');
            $table->string('telp')->nullable();
            $table->string('hadir_wt')->nullable();
            $table->string('hadir_ku')->nullable();
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
