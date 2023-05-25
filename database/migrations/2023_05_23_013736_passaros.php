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
        Schema::create('passaros', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('anilha', 115);
            $table->string('anilhalegal');
            $table->string('especie');
            $table->date('nasc');
            $table->string('sexo');
            $table->string('mae');
            $table->date('pai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passaros');
    }
};