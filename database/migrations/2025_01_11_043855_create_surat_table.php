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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->foreignId('jenis_surat_id')->constrained('jenis_surat');
            $table->foreignId('penduduk_id')->constrained('penduduks');
            $table->text('keperluan');
            $table->date('dikeluarkan_tanggal')->nullable();
            $table->date('berlaku_sampai')->nullable();
            $table->foreignId('perangkat_id');
            $table->enum('status', ['draft', 'selesai'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
