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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users');
            $table->date('order_date')->default(now());
            $table->string('order_status')->default('pending');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('pending');
            $table->unsignedInteger('total_amount');
            $table->string('shipping_address')->nullable();
            $table->string('shipping_method');
            $table->string('shipping_cost');
            $table->string('shipping_status')->default('pending');
            $table->string('billing_address')->nullable();
            $table->string('order_notes')->nullable();
            $table->unsignedInteger('discounts_applied')->default(0);
            $table->decimal('tax_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
