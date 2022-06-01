<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewDbmigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_dbmig', function (Blueprint $table) {
            $table->bigIncrements('id');;
            $table->string('CandyName');
            $table->integer('CandyPrice');
            $table->integer('CandyQuantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_dbmig');
    }
}
