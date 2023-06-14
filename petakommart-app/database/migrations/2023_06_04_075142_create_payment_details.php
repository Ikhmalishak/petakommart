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
        Schema::create('payments_details', function (Blueprint $table) {
            $table->unsignedInteger('paymentID');
            $table->foreign('paymentID')->references('paymentID')->on('payments')->onDelete('cascade');
            $table->unsignedInteger('itemID');
            $table->foreign('itemID')->references('itemID')->on('inventories')->onDelete('cascade');
            $table->decimal('item_price', 8, 2);
            $table->decimal('item_total_price', 8, 2);
            $table->integer('item_quantity');
            $table->timestamps();
            // $table->foreign('paymentID')
            // ->references('payments')->on('paymentID')->onDelete('cascade');
            // $table->foreign('itemID')
            // ->references('inventories')->on('itemID')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_details');
    }
};
