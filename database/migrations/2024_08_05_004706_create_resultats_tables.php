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
        Schema::create('resultat_votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bureau_de_vote_id')->constrained('bureau_de_votes'); 
            $table->foreignId('candidat_id')->constrained('candidats');
            $table->integer('nombre_voix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats');
    }
};
