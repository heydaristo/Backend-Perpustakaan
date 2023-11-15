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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_buku');
            $table->string('judul_buku');
            $table->foreignId('pengarang_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('penerbit_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('tahun_penerbit');
            $table->integer('jumlah');
            
            $table->timestamps();
        });
        // Schema::table('buku', function (Blueprint $table) {
        //     $table->foreignId('pengarang_buku')->references('nama')->on('pengarang')
        //     ->onDelete('cascade')->onUpdate('cascade');
            
        //     $table->foreignId('penerbit_buku')->references('nama')->on('penerbit')
        //     ->onDelete('cascade')->onUpdate('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
