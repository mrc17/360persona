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
        Schema::create('parrains', function (Blueprint $table) {
            $table->id();
            $table->string('nom_parrain')->nullable()->default('non renseigné');
            $table->string('prenom_parrain')->nullable()->default('non renseigné');
            $table->string('sexe_parrain')->nullable()->default('non renseigné');
            $table->string('profession_parrain')->nullable()->default('non renseigné');
            $table->string('appreciation_parrain')->nullable()->default('non renseigné');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parrains');
    }
};
