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
        Schema::create('passaros', function (Blueprint $reg) {
            $reg->id();
            $reg->string('nome', 255);
            $reg->string('anilha', 115);
            $reg->string('anilhalegal');
            $reg->string('mae');
            $reg->date('pai');
            $reg->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
