<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLukuInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luku_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->bigInteger('token_number')->unsigned()->unique();
            $table->decimal('token_units',4,2);
            $table->integer('amount');
            $table->string('token_bought_date');
            $table->string('proof_image');
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
        Schema::drop('luku_infos');
    }
}
