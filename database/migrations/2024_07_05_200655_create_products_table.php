<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->decimal('price');
            $table->unsignedInteger('stock_quantity')->default(0);
            $table->foreignId('category_id')->constrained('categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('brand_id')->constrained('brands')->restrictOnDelete()->cascadeOnUpdate();
            $table->decimal('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('image_url');
            $table->json('gallery_url');
            $table->unsignedInteger('sale_price');
            $table->date('sale_start_date');
            $table->date('sale_end_date');
            $table->unsignedSmallInteger('stock_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
