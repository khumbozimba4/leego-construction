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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name'); // Customer's name
            $table->string('customer_contact'); // Customer's contact details (phone/email)
            $table->text('equipment_details'); // Details of the requested equipment
            $table->decimal('daily_rate', 10, 2); // Daily rental rate for the equipment
            $table->integer('rental_duration'); // Duration in days for the rental
            $table->decimal('total_price', 10, 2); // Total cost for the requested equipment (calculated)
            $table->enum('status', ['pending', 'approved', 'rejected', 'expired'])->default('pending'); // Quotation status
            $table->timestamp('requested_at')->useCurrent(); // Timestamp of when the quotation was requested
            $table->timestamp('expires_at')->nullable(); // Expiry date for the quotation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
