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
        Schema::create('wilayah_ujians', function (Blueprint $table) {
            $table->id();
            $table->string('kode_upbjj');
            $table->string('nama_upbjj');
            $table->string('kode_wilayah_ujian');
            $table->string('nama_wilayah_ujian');
            $table->boolean('aktif')->default(1);
            $table->string('wilayah_utm');
            $table->string('lokasi_utm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah_ujians');
    }
};
