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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->string('name'); // Project name
            $table->text('description')->nullable(); // Description of the project
            $table->string('client')->nullable(); // Client name
            $table->date('start_date')->nullable(); // Start date of the project
            $table->date('end_date')->nullable(); // End date of the project
            $table->decimal('budget', 15, 2)->nullable(); // Budget
            $table->string('status')->default('pending'); // Status
            $table->string('file'); // Status
            // Add the foreign key constraint
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // Cascade delete if the user is deleted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
