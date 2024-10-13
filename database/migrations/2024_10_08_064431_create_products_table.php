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
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->decimal('price', 10, 2)->nullable(); // Price might be added later
            $table->string('brand');
            $table->string('model');
            $table->string('country');
            $table->json('photos')->nullable(); // Storing photos as a JSON array
            $table->text('description')->nullable();
            $table->json('specifications')->nullable(); // Storing specs as a JSON object
            $table->foreignId('author_id')->nullable();
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
