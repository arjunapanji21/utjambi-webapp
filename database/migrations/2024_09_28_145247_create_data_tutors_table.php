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
        Schema::create('data_tutors', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tutor');
            $table->string('nip')->nullable();
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->string('verif_ktp');
            $table->string('nidn')->nullable();
            $table->string('jk')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('kabko')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('tgl_sk')->nullable();
            $table->string('npwp')->nullable();
            $table->string('institusi')->nullable();
            $table->string('norek')->nullable();
            $table->string('bank')->nullable();
            $table->string('nama_rekening')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pelatihan')->nullable();
            $table->string('status_institusi')->nullable();
            $table->string('status_instansi')->nullable();
            $table->string('status_pekerjaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tutors');
    }
};
