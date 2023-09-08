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
            $table->string('NomParrain')->nullable();
            $table->string('PrenomParrain')->nullable();
            $table->string('sexeParrain')->nullable();
            $table->string('ProfessionParrain')->nullable();
            $table->string('AppreciationParrain')->nullable();
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
