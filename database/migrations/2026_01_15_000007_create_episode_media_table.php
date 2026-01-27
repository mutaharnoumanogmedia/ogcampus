<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('episode_media', function (Blueprint $table) {
            $table->id();

            $table->foreignId('episode_id')
                ->constrained('episodes')
                ->cascadeOnDelete();

            // If the media item is a video, we can link to existing videos table
            $table->foreignId('video_id')
                ->nullable()
                ->constrained('videos')
                ->nullOnDelete();

            $table->enum('type', [
                'video',        // uses video_id (preferred) or path fields
                'pdf',          // uses file_path
                'external_url', // uses external_url
                'embed',        // uses embed_html
            ])->default('video');

            // Generic metadata
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            // Storage for non-video media or fallback for video (if not using video_id)
            $table->string('storage_disk')->default('s3');
            $table->string('file_path')->nullable();
            $table->unsignedBigInteger('file_size')->nullable();
            $table->string('mime_type', 191)->nullable();

            // External media
            $table->string('external_url')->nullable();
            $table->text('embed_html')->nullable();

            // Playback / ordering
            $table->unsignedInteger('duration')->nullable(); // seconds (e.g. for video or audio)
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_downloadable')->default(false);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['episode_id', 'sort_order']);
            $table->index(['type', 'deleted_at']);
            $table->index('video_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('episode_media');
    }
};


