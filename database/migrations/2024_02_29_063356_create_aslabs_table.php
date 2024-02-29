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
        Schema::create('aslab', function (Blueprint $table) {
            $table->bigIncrements('id_aslab')->startingValue(10000);
            $table->string('nama');
            $table->string('npm')->unique();
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->string('status')->unique();
            $table->foreignId('id_role_aslab');
            $table->enum('status', ['aktif', 'tidak'])->default('tidak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aslab');
    }
};
