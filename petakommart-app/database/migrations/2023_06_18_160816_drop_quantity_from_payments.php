<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
<<<<<<< Updated upstream:petakommart-app/database/migrations/2023_06_18_160816_drop_quantity_from_payments.php
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('quantity');
=======
        Schema::create('users', function (Blueprint $table) {
            $table->string('cashierid');
            $table->string('name');
            $table->string('gender');
            $table->timestamps();
            $table->string('email');
            $table->string('phoneNum');
            $table->string('password');
            $table->string('adminid');
            $table->string('adminpassword');
            $table->string('category');
>>>>>>> Stashed changes:petakommart-app/database/migrations/2023_05_28_131629_add_category_to_users.php
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< Updated upstream:petakommart-app/database/migrations/2023_06_18_160816_drop_quantity_from_payments.php
        Schema::table('payments', function (Blueprint $table) {
            //
        });
=======
        Schema::dropIfExists('users') ;
    
>>>>>>> Stashed changes:petakommart-app/database/migrations/2023_05_28_131629_add_category_to_users.php
    }
};
