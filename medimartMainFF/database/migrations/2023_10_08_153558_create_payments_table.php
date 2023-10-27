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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->string('payment_method');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('order_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->foreign('order_id')->references('order_id')->on('orders');
        });
    }

    /** 	payment_id	payment_method	user_id	admin_id	order_id	

     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
