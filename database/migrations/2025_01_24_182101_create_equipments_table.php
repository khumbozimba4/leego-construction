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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('name'); // Name of the equipment
            $table->string('type')->nullable(); // Type of equipment (e.g., excavator, bulldozer, etc.)
            $table->text('description')->nullable(); // Description of the equipment
            $table->string('serial_number')->unique(); // Unique identifier for equipment
            $table->decimal('rental_price', 10, 2)->nullable(); // Rental price per day
            $table->boolean('is_available')->default(true); // Availability status
            $table->string('photo')->nullable(); // Path to the equipment's photo
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
