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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('buku_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        // Schema::table('peminjaman', function (Blueprint $table) {
        //     $table->foreignId('id_buku')->references('id')->on('buku')
        //     ->onDelete('cascade')->onUpdate('cascade');
            
        //     $table->foreignId('id_profile')->references('id')->on('profile')
        //     ->onDelete('cascade')->onUpdate('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
