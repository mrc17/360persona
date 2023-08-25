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
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->string('sexe')->nullable();
            $table->string('Profession')->nullable();
            $table->string('Appreciation')->nullable();
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
