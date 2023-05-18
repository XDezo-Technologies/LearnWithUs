<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userID')->unsigned()->index()->nullable();
            $table->foreign('userID')->references('id')->on('user')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('product_id');
            $table->bigInteger('courseID')->unsigned()->index()->nullable();
            $table->foreign('courseID')->references('id')->on('course')->onDelete('cascade');
            $table->string('amount');
            $table->string('esewa_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
