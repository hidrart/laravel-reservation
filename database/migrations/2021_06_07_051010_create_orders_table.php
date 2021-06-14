<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('idOrders');
            $table->dateTime('ordersDate', $precision = 0);;
            $table->text('ordersNotes');
            $table->json('ordersFood');
            $table->json('ordersTable');
            $table->integer('ordersRestaurant');
            $table->integer('ordersCustomer');
            $table->boolean('status');    
            $table->integer('tax');
            $table->integer('discount');
            $table->integer('totalPrice'); 
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
