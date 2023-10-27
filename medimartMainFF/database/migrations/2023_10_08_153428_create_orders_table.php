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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('order_address');
            $table->string('phone_no');
            $table->string('order_status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('cart_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->foreign('cart_id')->references('cart_id')->on('carts');


        });
    }

    /** order_id	order_address	phone_no	user_id	admin_id	cart_id	order_status	

     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
