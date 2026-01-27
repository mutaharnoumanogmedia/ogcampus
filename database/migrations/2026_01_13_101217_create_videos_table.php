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


            $table->foreignId('creator_id')
                ->constrained('users')
                ->cascadeOnDelete();


            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            $table->unsignedInteger('duration'); // seconds
            $table->unsignedBigInteger('file_size')->nullable(); // bytes


            $table->string('storage_disk')->default('s3');
            $table->string('video_path');        // master file or streaming manifest
            $table->string('thumbnail_path')->nullable();


            $table->enum('streaming_type', ['progressive', 'hls', 'dash'])
                ->default('hls');

            $table->boolean('has_hd')->default(true);
            $table->boolean('has_full_hd')->default(false);
            $table->boolean('has_4k')->default(false);

         
            $table->boolean('is_free')->default(false);

            $table->enum('access_level', [
                'public',        // visible to all
                'subscriber',    // requires viewer subscription
                'creator_only',  // internal / training
            ])->default('subscriber');


            $table->enum('status', [
                'draft',
                'processing',
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

            
           
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('likes')->default(0);
            $table->unsignedBigInteger('dislikes')->default(0);

             
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

          
            $table->index(['creator_id', 'status']);
            $table->index(['status', 'published_at']);
            $table->index('views');
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
