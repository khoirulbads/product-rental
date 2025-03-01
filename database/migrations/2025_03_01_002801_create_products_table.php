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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');  
            $table->text('description'); 
            $table->string('sku')->unique();  
            $table->string('category')->nullable();  
            $table->boolean('status')->default(true); 
            $table->string('image_url')->nullable(); 
            $table->text('short_description')->nullable(); 
            $table->decimal('weight', 8, 2)->nullable(); 
            $table->string('manufacturer')->nullable();
            $table->uuid('created_by')->nullable(); 
            $table->uuid('updated_by')->nullable(); 
            $table->timestamps();
            $table->softDeletes();  
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
