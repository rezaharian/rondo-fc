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
        Schema::create('club_matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opponent_id')->constrained('opponents')->onDelete('cascade');
            $table->dateTime('match_date');
            $table->string('stadium', 100)->nullable();
            $table->integer('score_rondo')->default(0);
            $table->integer('score_opponent')->default(0);
            $table->enum('status', ['Scheduled', 'Live', 'Finished', 'Canceled'])->default('Scheduled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_matches');
    }
};