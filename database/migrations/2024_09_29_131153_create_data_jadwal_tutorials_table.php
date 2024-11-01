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
        Schema::create('data_jadwal_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('kode_upbjj');
            $table->string('nama_upbjj');
            $table->string('kode_jadwal');
            $table->string('hari');
            $table->string('jam');
            $table->string('status_aktif');
            $table->string('status_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jadwal_tutorials');
    }
};
