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
        Schema::create('reg_citas', function (Blueprint $table) {
            $table->id();
            $table->string('Cit_Nom_masc');
            $table->string('Cit_Raza');
            $table->string('Cit_Edad');
            $table->string('Cit_Sexo');
            $table->string('Cit_Nom');
            $table->string('Cit_Correo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg_citas');
    }
};
