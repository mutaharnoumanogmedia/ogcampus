<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();

            $table->foreignId('series_id')
                ->constrained('series')
                ->cascadeOnDelete();

            $table->unsignedSmallInteger('season_number'); // 1..N
            $table->string('title')->nullable(); // optional display title
            $table->string('slug')->nullable();  // optional, can be used for URLs
            $table->text('description')->nullable();

            $table->string('poster_path')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->enum('status', ['draft', 'published', 'archived'])
                ->default('draft');
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['series_id', 'season_number']);
            $table->index(['series_id', 'sort_order']);
            $table->index(['series_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};


