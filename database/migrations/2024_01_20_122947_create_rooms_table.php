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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 24);
            $table->string('slug', 48)->unique();
            $table->json('image_path')->nullable();
            $table->longText('description');
            $table->integer('accommodation_number');
            $table->decimal('price', 5);
            $table->integer('apartment_size');
            $table->boolean('is_occupied')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
