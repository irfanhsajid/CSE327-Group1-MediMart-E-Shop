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
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('cart_id');
            $table->string('item_name');
            $table->integer('item_quantity');
            $table->float('item_total_price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('accessorie_id');
            $table->unsignedBigInteger('book_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->foreign('accessorie_id')->references('accessorie_id')->on('accessories');
            $table->foreign('book_id')->references('book_id')->on('books');
        });
    }

    /** 	cart_id	item_name	item_quantity	item_total_price	user_id	admin_id	book_id	accs_id	

     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
