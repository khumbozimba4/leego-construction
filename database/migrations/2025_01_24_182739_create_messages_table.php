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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('phoneNumber'); // Name of the equipment
            $table->string('email')->nullable(); // Type of equipment (e.g., excavator, bulldozer, etc.)
            $table->string('subject')->nullable(); // Type of equipment (e.g., excavator, bulldozer, etc.)
            $table->text('message')->nullable(); // Description of the equipment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
