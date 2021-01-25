<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSopasTable extends Migration
{
    public function up()
    {
        Schema::create('sopas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->string('nombre')->nullable()->comment('Nombre de la sopa');
            $table->integer('precio')->nullable()->comment('precio de la sopa');
            $table->string('imagen')->nullable()->comment('imagen de la sopa');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sopas');
    }
}
