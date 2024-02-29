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
        Schema::create('papan_informasi', function (Blueprint $table) {
            $table->bigIncrements('id_papan_informasi')->startingValue(1000);
            $table->string('slug')->unique();
            $table->text('deskripsi')->nullable();
            $table->string('warna_papan')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papan_informasi');
    }
};
