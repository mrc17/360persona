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
        Schema::create('habitations', function (Blueprint $table) {
            $table->id();
            $table->string('Ville');
            $table->string('Commune');
            $table->string('Quartier');
            $table->string('SituationMatrimoliale');
            $table->string('RégimeMatrimoliale');
            $table->foreignId('id_Assurance')->constrained('assurances');
            $table->foreignId('id_finance')->constrained('Finances');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitations');
    }
};
