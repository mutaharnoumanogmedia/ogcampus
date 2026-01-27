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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();

            // Display
            $table->string('name'); // e.g. "Creator Pro", "Viewer Premium"
            $table->string('slug')->unique();

            // Billing
            $table->string('stripe_price_id')->unique();
            $table->enum('interval', ['monthly', 'yearly']);
            $table->unsignedInteger('price'); // stored in cents

            // Purpose
            $table->enum('type', ['creator', 'viewer']);

            // Features
            $table->unsignedInteger('video_upload_limit')->nullable(); // null = unlimited
            $table->boolean('can_stream_hd')->default(true);
            $table->boolean('can_download')->default(false);

            // Status
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
