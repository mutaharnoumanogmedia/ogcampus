<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genre_series', function (Blueprint $table) {
            $table->id();

            $table->foreignId('genre_id')
                ->constrained('genres')
                ->cascadeOnDelete();

            $table->foreignId('series_id')
                ->constrained('series')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['genre_id', 'series_id']);
            $table->index(['series_id', 'genre_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genre_series');
    }
};


