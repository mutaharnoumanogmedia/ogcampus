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
        Schema::create('user_video_reactions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('video_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->enum('reaction', ['like', 'dislike']);

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['user_id', 'video_id']);
            $table->index(['video_id', 'reaction']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_video_reactions');
    }
};
