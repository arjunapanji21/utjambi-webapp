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
        Schema::table('wilayah_ujians', function (Blueprint $table) {
            $table->string('lokasi_utm')->nullable();
            // $table->dropColumn('lokasi_utm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
     
    }
};
