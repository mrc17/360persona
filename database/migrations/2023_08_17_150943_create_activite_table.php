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
            $table->string('Activite1')->nullable();
            $table->string('Denomination')->nullable();
            $table->string('Localisation1')->nullable();
            $table->string('numRccm')->nullable();
            $table->string('Activite2')->nullable();
            $table->string('numeroDeLaDfe')->nullable();
            $table->string('Localisation2')->nullable();
            $table->string('numcnps')->nullable();
            $table->string('Projet')->nullable();
            $table->string('CoutestimatifEnlettre')->nullable();
            $table->string('CoutestimatifEnchiffre')->nullable();
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
