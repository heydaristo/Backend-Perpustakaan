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
        Schema::create('pengembalian_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('pengembalians_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('buku_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('peminjaman_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggal_pengembalian');
            $table->integer('denda');
            $table->timestamps();
        });
        // Schema::table('pengembalian_details', function (Blueprint $table) {
        //     $table->foreignId('id_buku')->references('id')->on('buku')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian_details');
    }
};
