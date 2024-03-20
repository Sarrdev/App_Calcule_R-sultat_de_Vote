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
        Schema::create('bureau_de_votes', function (Blueprint $table) {
            $table->id();
            $table->integer('n°bureau');
            $table->foreignId('centre_de_vote_id')->constrained('centre_de_votes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureaux_de_vote');
    }
};
