<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('user_code', 50)->nullable();
            $table->string('admin_code', 50)->nullable();
                
            // Foreign key relations
            // $table->foreign('user_code')->references('user_code')->on('users')->onDelete('set null');
            // $table->foreign('admin_code')->references('user_code')->on('admins')->onDelete('set null');
                    
            $table->date('date'); // Date
            $table->string('location', 10); // Location
            $table->string('item_id')->nullable(); // Reference ID for item
            $table->string('customer'); // Customer name or code
            $table->string('payment_type'); // Payment Type
            $table->string('currency', 10)->default('Kyats'); // Currency
            $table->decimal('quantity', 10, 2); // Quantity
            $table->decimal('discount_and_foc', 15, 2)->default(0); // Discount and FOC
            $table->decimal('paid', 15, 2)->default(0); // Paid amount
            $table->decimal('total', 15, 2); // Total amount
            $table->decimal('balance', 15, 2); // Balance

            // Timestamps for created and updated
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
