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
        Schema::create('accessories', function (Blueprint $table) {
            $table->bigIncrements('accessorie_id');
            $table->string('accessorie_name');
            $table->string('accessorie_type');
            $table->integer('accessorie_price');
            $table->integer('accessorie_counter');
            $table->string('accessorie_details');
            $table->string('accessorie_img')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('admin_id')->on('admins');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
