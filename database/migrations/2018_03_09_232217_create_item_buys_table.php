<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_buys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryid');
            $table->string('itemname');
            $table->string('brand');
            $table->integer('offeramount');
            $table->text('description');
            $table->string('location',150);
            $table->string('phone',20);
            $table->string('status',20)->default('unsolved');
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
        Schema::drop('item_buys');
    }
}
