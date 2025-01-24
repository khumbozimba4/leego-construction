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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('role'); // Name of the equipment
            $table->string('name')->nullable(); // Type of equipment (e.g., excavator, bulldozer, etc.)
            $table->string('description')->nullable(); // Type of equipment (e.g., excavator, bulldozer, etc.)
            $table->string('experience')->nullable(); // Type of equipment (e.g., excavator, bulldozer, etc.)
            $table->string('photo')->nullable(); // Description of the equipment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
