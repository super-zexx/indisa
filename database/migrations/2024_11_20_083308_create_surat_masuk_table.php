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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            // tujuan
            $table->string('kepada');
            // asal
            $table->string('nama');
            $table->string('instansi');
            $table->text('alamat');
            // surat masuk
            $table->date('tanggal_diterima');
            $table->enum('sifat_surat', ['biasa', 'penting','rahasia']);
            $table->string('nomor_surat');
            $table->string('perihal');
            // file
            $table->enum('upload_surat', ['ya', 'tidak']);
            $table->string('file');
            // file bisa gambar bisa pdf
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuk');
    }
};
