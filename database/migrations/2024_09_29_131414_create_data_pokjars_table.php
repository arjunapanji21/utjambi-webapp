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
        Schema::create('data_pokjars', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pokjar');
            $table->string('nama_pokjar');
            $table->string('kode_kabko');
            $table->string('nama_kabko');
            $table->string('kode_pos');
            $table->string('nama_pos');
            $table->string('kode_upbjj');
            $table->string('nama_upbjj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pokjars');
    }
};
