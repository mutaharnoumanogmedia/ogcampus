<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('series_ratings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('series_id')
                ->constrained('series')
                ->cascadeOnDelete();

            // 1–5 stars style rating (can be extended later)
            $table->unsignedTinyInteger('rating'); // 1..5

            // Optional review / feedback
            $table->text('review')->nullable();

            // Simple analytics / context
            $table->string('source', 50)->nullable(); // web, mobile, tv, etc.
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent')->nullable();

            $table->timestamps();

            $table->unique(['user_id', 'series_id']); // one rating per user per series
            $table->index(['series_id', 'rating']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('series_ratings');
    }
};


