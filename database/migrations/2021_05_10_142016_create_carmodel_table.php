<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->unsignedBigInteger('gama_id');
            $table->string('description',6000);
            $table->integer('autonomia');
            $table->decimal('aceleracion');
            $table->integer('velocidad_maxima');
            $table->integer('caballos');
            $table->decimal('coeficiente');
            $table->string('tren_motriz');
            $table->string('llantas');
            $table->integer('capacidad');
            $table->integer('maletero');
            $table->decimal('peso');
            $table->string('description2',6000);
            $table->foreign('gama_id')->references('id')->on('gamas');
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
        Schema::dropIfExists('carmodels');
    }
}
