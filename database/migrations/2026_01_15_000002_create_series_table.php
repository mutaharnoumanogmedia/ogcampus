<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();

            // Ownership / Tenant-like scoping (Campus Creator)
            $table->foreignId('creator_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('genre_id')
                ->nullable()
                ->constrained('genres')
                ->nullOnDelete();

            // Core metadata
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();

            // Artwork / promo
            $table->string('poster_path')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->string('logo_path')->nullable();

            // Optional trailer (ties into existing video pipeline)
            $table->foreignId('trailer_video_id')
                ->nullable()
                ->constrained('videos')
                ->nullOnDelete();

            // Netflix-ish catalog fields
            $table->unsignedSmallInteger('release_year')->nullable();
            $table->string('original_language', 10)->nullable(); // ISO-ish (en, ur, etc.)
            $table->string('country_code', 2)->nullable(); // ISO-3166-1 alpha-2
            $table->string('age_rating', 10)->nullable(); // e.g., PG, 13+, TV-MA

            // Discovery / ordering
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_featured')->default(false);

            // Access & Lifecycle (mirrors courses/videos conventions)
            $table->boolean('is_free')->default(false);
            $table->enum('access_level', ['public', 'subscriber', 'creator_only'])
                ->default('subscriber');

            $table->enum('status', [
                'draft',
                'pending_review',
                'approved',
                'rejected',
                'archived',
                'published'
            ])->default('draft');

            $table->foreignId('approved_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('approved_at')->nullable();
            $table->text('rejection_reason')->nullable();

            $table->timestamp('published_at')->nullable();

            // Lightweight aggregates
            $table->unsignedBigInteger('views')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['creator_id', 'status']);
            $table->index(['genre_id', 'status']);
            $table->index(['status', 'published_at']);
            $table->index(['is_featured', 'sort_order']);
            $table->index('views');
            $table->index('series_total_duration');
            $table->index('tags');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
