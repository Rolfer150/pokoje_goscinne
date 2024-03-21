<?php

use App\Enums\PaymentType;
use App\Enums\RentalStatus;
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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->nullable()->constrained('rooms')->cascadeOnDelete();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->longText('comments')->nullable();
            $table->integer('people_amount');
            $table->date('rental_start');
            $table->date('rental_end');
            $table->float('payment');
            $table->enum('payment_type', PaymentType::values())->default(PaymentType::ON_PLACE->value);
            $table->enum('status', RentalStatus::values())->default(RentalStatus::WAITING->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
