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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id(); // Colonne ID auto-incrémentée
            $table->string('nom');
            $table->string('prenom');
            $table->string('classe'); // Foreign Key
            $table->string('parent_contact')->nullable();
            $table->timestamps(); // Colonnes created_at et updated_at
            //$table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
