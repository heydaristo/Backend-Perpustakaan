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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('buku_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->integer('pengembalian_id');
            // $table->foreignId('users_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
        // Schema::table('pengembalian', function (Blueprint $table) {
        //     $table->foreignId('id_profile')->references('id')->on('profile')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
