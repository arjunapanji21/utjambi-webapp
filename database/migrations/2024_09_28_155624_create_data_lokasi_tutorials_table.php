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
        Schema::create('data_lokasi_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('upbjj');
            $table->string('kode_lokasi');
            $table->string('nama_lokasi');
            $table->string('kabko');
            $table->string('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_lokasi_tutorials');
    }
};
