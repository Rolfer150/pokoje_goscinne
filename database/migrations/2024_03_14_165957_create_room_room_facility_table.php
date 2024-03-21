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
        Schema::create('room_room_facility', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->nullable()->constrained('rooms')->cascadeOnDelete();
            $table->foreignId('room_facility_id')->nullable()->constrained('room_facilities')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_room_facility');
    }
};
