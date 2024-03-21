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
            $table->string('image_path', 2048)->default('[]');
            $table->longText('description');
            $table->integer('accommodation_number');
            $table->float('price');
            $table->integer('apartment_size');
            $table->boolean('isOccupied')->default(false);
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
