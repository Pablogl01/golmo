<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('model_id');
            $table->string('url');
            $table->unsignedBigInteger('color');
            $table->unsignedBigInteger('llanta');
            $table->foreign('model_id')->references('id')->on('car_models');
            $table->foreign('color')->references('id')->on('variantes');
            $table->foreign('llanta')->references('id')->on('variantes');
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
        Schema::dropIfExists('imagenes');
    }
}
