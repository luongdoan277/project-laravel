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
            $table->bigIncrements('id');
            $table->string('order_number',50)->unique();
            $table->bigInteger('customer_id');
            $table->text('shipping_address');
            $table->integer('shipping_method');
            $table->string('tracking_number', 50)->nullable();
            $table->integer('payment_method')->nullable(1)->comment('1: Payment on delivery, 2:ATM');
            $table->integer('status_payment')->default(0);
            $table->double('total')->nullable();
            $table->double('sub_total')->nullable();
            $table->double('shipping_fee')->nullable();
            $table->integer('status')->default(1);
            $table->string('note')->nullable();
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
}
