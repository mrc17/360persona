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
        Schema::create('artisans', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Dtnaissance');
            $table->string('LieuNaissance');
            $table->string('Profession');
            $table->string('AnExpProf');
            $table->string('Sexe');
            $table->string('AnProf');
            $table->string('registreMetier');
            $table->string('Email');
            $table->string('Contact');
            $table->foreignId('id_parrain')->constrained("parrains");
            $table->foreignId('id_active')->constrained("actives");
            $table->foreignId('id_habitation')->constrained("habitations");
            $table->foreignId('id_agent')->constrained("agents");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};
