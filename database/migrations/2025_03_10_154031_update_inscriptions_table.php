<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('inscriptions');

        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('matricule')->unique();
            $table->integer('age');
            $table->string('classe');
            $table->decimal('montant', 8, 2);
            $table->string('sexe');
            $table->string('parent_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
  /*  public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }*/
};
