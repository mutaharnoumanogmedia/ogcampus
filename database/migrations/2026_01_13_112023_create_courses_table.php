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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            /* Ownership */
            $table->foreignId('creator_id')
                ->constrained('users')
                ->cascadeOnDelete();

            /* Core Info */
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            /* Media */
            $table->string('thumbnail_path')->nullable();

            /* Access & Monetization */
            $table->boolean('is_free')->default(false);
            $table->enum('access_level', ['public', 'subscriber'])
                ->default('subscriber');

            /* Moderation & Lifecycle */
            $table->enum('status', [
                'draft',
                'pending_review',
                'approved',
                'rejected',
                'archived',
            ])->default('draft');

            $table->foreignId('approved_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('approved_at')->nullable();
            $table->text('rejection_reason')->nullable();

            /* Publishing */
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['creator_id', 'status']);
            $table->index(['status', 'published_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
