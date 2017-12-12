<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('seller_id')->unsigned();
            $table->integer('buyer_id')->nullable()->unsigned();
            $table->integer('issuer_id')->nullable()->unsigned();
            $table->smallInteger('status')->default(0);//0 not processed, 1 success, 2 cancelled
            $table->timestamp('purchase_time')->nullable();
            $table->smallInteger('rating')->nullable();
            $table->timestamps();
            //
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('buyer_id')->references('id')->on('users');
            $table->foreign('issuer_id')->references('id')->on('users');

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
}
