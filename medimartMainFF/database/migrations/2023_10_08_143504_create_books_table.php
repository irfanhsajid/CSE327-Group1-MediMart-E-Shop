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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('book_name');
            $table->string('book_type');
            $table->integer('book_price');
            $table->integer('book_counter')->nullable();
            $table->string('book_details');
            $table->string('book_img',50)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('admin_id')->on('admins');
            $table->timestamps();

        });
    }

    // book_id	book_name	book_price	book_type	book_quantity_new	book_quantity_used	book_details	user_id	admin_id	book_img	


    /**
     * Reverse the migrations.
     */
    

     
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
