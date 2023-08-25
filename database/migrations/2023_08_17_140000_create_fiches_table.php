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
            $table->string('date')->nullable();
            $table->string('numfiche')->nullable();
            $table->string('code')->nullable();
            $table->string('zone')->nullable();
            $table->string('ordre')->nullable();
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
