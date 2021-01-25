<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePescadosTable extends Migration
{
    public function up()
    {
        Schema::create('pescados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->string('nombre')->nullable()->comment('Nombre del plato');
            $table->integer('precio')->nullable()->comment('precio del plato');
            $table->string('imagen')->nullable()->comment('imagen del plato');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pescados');
    }
}
