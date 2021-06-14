<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('idtable');
            $table->string('tableName');
            $table->integer('tableCategory');
            $table->integer('tablePrice');
            $table->integer('tableSeat');
            $table->string('tableLocation');
            $table->boolean('status');
            $table->string('tablePicture'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
