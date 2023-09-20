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
            $table->string('activite1')->nullable()->default('non renseigné');
            $table->string('denomination')->nullable()->default('non renseigné');
            $table->string('localisation1')->nullable()->default('non renseigné');
            $table->string('num_rccm')->nullable()->default('non renseigné');
            $table->string('activite2')->nullable()->default('non renseigné');
            $table->string('numero_de_la_dfe')->nullable()->default('non renseigné');
            $table->string('localisation2')->nullable()->default('non renseigné');
            $table->string('num_cnps')->nullable()->default('non renseigné');
            $table->string('projet')->nullable()->default('non renseigné');
            $table->string('cout_estimatif_en_lettre')->nullable()->default('non renseigné');
            $table->string('cout_estimatif_en_chiffre')->nullable()->default(0);
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
