<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('season_id')
                ->constrained('seasons')
                ->cascadeOnDelete();

            // Optional logical grouping inside a season
            $table->foreignId('section_id')
                ->nullable()
                ->constrained('sections')
                ->nullOnDelete();

            $table->unsignedSmallInteger('episode_number'); // 1..N per season
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();

            $table->string('thumbnail_path')->nullable();

            // Runtime at episode level (can be sum of media items, or set directly)
            $table->unsignedInteger('runtime')->nullable(); // seconds

            $table->unsignedInteger('sort_order')->default(0);

            $table->enum('status', ['draft', 'published', 'archived'])
                ->default('draft');
            $table->timestamp('published_at')->nullable();

            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('is_free')->default(false);

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['season_id', 'episode_number']);
            $table->index(['season_id', 'sort_order']);
            $table->index(['section_id', 'sort_order']);
            $table->index(['season_id', 'status']);
            $table->index('views');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
