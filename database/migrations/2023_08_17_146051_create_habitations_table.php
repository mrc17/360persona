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
            $table->string('ville');
            $table->string('commune');
            $table->string('quartier');
            $table->string('situation_matrimoliale')->nullable()->default('non renseigné');
            $table->string('regime_matrimoliale')->nullable()->default('non renseigné');
            $table->foreignId('id_assurance')->constrained('assurances')->onDelete('cascade');
            $table->foreignId('id_finance')->constrained('finances')->onDelete('cascade');
            $table->foreignId('organisation_id')->constrained('organisations')->onDelete('cascade');
            $table->foreignId('charge_id')->constrained('charges')->onDelete('cascade');
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
