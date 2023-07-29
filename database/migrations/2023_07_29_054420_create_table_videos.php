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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->timestamps();
            $table->foreignId('event_id')->constrained('events');
            $table->string('title');
            $table->string('url');
            $table->string('thumbnail')->nullable();
            $table->text('description')->nullable();
            $table->string('duration')->nullable();
            $table->text('embed_html')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
