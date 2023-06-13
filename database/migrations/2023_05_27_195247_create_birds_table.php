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
        Schema::create('birds', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('especie');
            $table->string('anilha');
            $table->string('anilha_legal');
            $table->date('data_nascimento');
            $table->enum('sexo', ['Macho', 'Fêmea', 'Indefinido']);
            $table->string('mae')->nullable();
            $table->string('pai')->nullable();
            $table->string('pat_grandfather')->nullable();
            $table->string('pat_grandmother')->nullable();
            $table->string('mat_grandfather')->nullable();
            $table->string('mat_grandmother')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birds');
    }
};
