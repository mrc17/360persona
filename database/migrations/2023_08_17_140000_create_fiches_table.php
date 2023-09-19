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
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();
            $table->string('date_fiche')->nullable()->default('non renseigné');
            $table->string('num_fiche')->nullable()->default('non renseigné');
            $table->string('code_fiche')->nullable()->default('non renseigné');
            $table->string('zone_fiche')->nullable()->default('non renseigné');
            $table->string('ordre_fiche')->nullable()->default('non renseigné');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiches');
    }
};
