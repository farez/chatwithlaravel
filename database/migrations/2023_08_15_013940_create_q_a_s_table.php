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
        Schema::create('q_a_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('video_id')->constrained();
            $table->uuid('uuid');
            $table->text('question');
            $table->text('answer');
            $table->json('response_data');
            $table->text('formatted_answer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_a_s');
    }
};
