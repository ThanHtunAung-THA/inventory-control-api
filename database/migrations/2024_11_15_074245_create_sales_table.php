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
            $table->string('user_code', 50)->nullable(); //default code is 20001 to 20004 for admin side, 30001 to 30009 for user side
            // $table->string('admin_code', 50)->nullable();
                
            // Foreign key relations
            // $table->foreign('user_code')->references('user_code')->on('users')->onDelete('set null');
            // $table->foreign('admin_code')->references('user_code')->on('admins')->onDelete('set null');

            $table->date('date'); // Date
            $table->string('location', 10); // Location
            $table->string('item_id')->nullable(); // Reference ID for item
            $table->string('customer'); // Customer name is customer for dafault or Mr.John, Ms.James
            $table->string('payment_type'); // Payment Type is COD , Credit Card, Bank Transfer etc.
            $table->string('currency', 10)->default('Kyats'); // Currency is kyats , USD, etc.
            $table->integer('quantity'); // Quantity in smallest units, e.g., grams if applicable
            $table->integer('discount_and_foc')->default(0); // Discount and FOC in cents
            $table->integer('paid')->default(0); // Paid amount in cents
            $table->integer('total'); // Total amount in cents
            $table->integer('balance'); // Balance in cents
            
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
