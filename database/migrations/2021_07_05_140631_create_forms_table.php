<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('idforms');
            $table->string('nama');
            $table->string('nohp');
            $table->string('cafe');
            $table->dateTime('waktu');
            $table->string('meja');
            $table->string('menu');
            $table->text('tambahan'); 
            $table->dateTime('created_at'); 
            $table->dateTime('updated_at'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
