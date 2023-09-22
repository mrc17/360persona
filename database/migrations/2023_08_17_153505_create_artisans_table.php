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
            $table->string('nom');
            $table->string('prenom');
            $table->string('dtnaissance')->nullable()->default('non renseigné');
            $table->string('lieu_naissance')->nullable()->default('non renseigné');
            $table->string('profession');
            $table->string('an_exp_prof')->nullable()->default('non renseigné');
            $table->string('sexe');
            $table->string('an_prof')->nullable()->default('non renseigné');
            $table->string('registre_metier')->nullable()->default('non renseigné');
            $table->string('email')->nullable()->default('non renseigné');
            $table->string('contact');
            $table->foreignId('id_parrain')->constrained("parrains");
            $table->foreignId('id_habitation')->constrained("habitations")->onDelete('cascade'); // Ajout de onDelete('cascade')
            $table->foreignId('id_agent')->constrained("agents");
            $table->foreignId('id_fiche')->constrained("fiches")->onDelete('cascade');
            $table->foreignId('id_activite')->constrained("activites")->onDelete('cascade');
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
