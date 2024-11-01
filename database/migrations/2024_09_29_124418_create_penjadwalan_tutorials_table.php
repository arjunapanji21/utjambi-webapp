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
        Schema::create('penjadwalan_tutorials', function (Blueprint $table) {
            $table->id();
            $table->string('masa');
            $table->string('kode_tutorial');
            $table->string('kode_tutor')->nullable();
            $table->string('kode_kelas')->nullable();
            $table->string('kode_jadwal')->nullable();
            $table->string('tgl_mulai')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->string('prediksi')->default(0);
            $table->string('link')->nullable();
            $table->string('email_pembuat_teams')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjadwalan_tutorials');
    }
};
