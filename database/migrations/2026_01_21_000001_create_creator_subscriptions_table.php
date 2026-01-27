<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('creator_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_id');
            $table->decimal('amount', 10, 2);
            $table->string('currency')->default('EUR');
            $table->string('plan');
            $table->string('status');
            $table->string('transaction_id')->unique();
            $table->string('payment_method')->nullable();

            $table->date('payment_date');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users')->onDelete('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('creator_subscriptions');
    }
};
