<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('captions', function (Blueprint $table) {
            DB::statement('ALTER TABLE captions ADD COLUMN embedding vector(1536)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('captions', function (Blueprint $table) {
            DB::statement('ALTER TABLE captions DROP COLUMN embedding');
        });
    }
};
