<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('idOrder');
            $table->dateTime('orderDate', $precision = 0);;
            $table->text('orderNotes');
            $table->json('orderFood');
            $table->json('orderTable');
            $table->integer('orderRestaurant');
            $table->integer('orderCustomer');
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
        Schema::dropIfExists('order');
    }
}
