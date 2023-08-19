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
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->string('Activite1');
            $table->string('Denomination');
            $table->string('Localisation1');
            $table->string('numRccm');
            $table->string('Activite2');
            $table->string('numeroDeLaDfe');
            $table->string('Localisation2');
            $table->string('numcnps');
            $table->string('Projet');
            $table->string('CoutestimatifEnlettre');
            $table->string('CoutestimatifEnchiffre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activites');
    }
};
