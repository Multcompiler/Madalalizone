<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('faculty');
            $table->integer('amount');
            $table->string('status')->default('Confirmed');
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
        Schema::drop('party_infos');
    }
}
