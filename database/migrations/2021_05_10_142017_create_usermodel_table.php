<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('llanta');
            $table->unsignedBigInteger('color');
            $table->unsignedBigInteger('motor');
            $table->unsignedBigInteger('audio');
            $table->unsignedBigInteger('acabados');
            $table->unsignedBigInteger('total_price');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('model_id')->references('id')->on('car_models');
            $table->foreign('llanta')->references('id')->on('variantes');
            $table->foreign('color')->references('id')->on('variantes');
            $table->foreign('motor')->references('id')->on('variantes');
            $table->foreign('audio')->references('id')->on('variantes');
            $table->foreign('acabados')->references('id')->on('variantes');
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
        Schema::dropIfExists('user__models');
    }
}
