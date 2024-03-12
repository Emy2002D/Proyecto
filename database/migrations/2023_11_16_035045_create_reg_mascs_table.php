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
        Schema::create('reg_mascs', function (Blueprint $table) {
            $table->id();
            $table->string('Masc_Nom');
            $table->string('Masc_Raza');
            $table->string('Masc_Edad');
            $table->string('Masc_Sexo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg_mascs');
    }
};
