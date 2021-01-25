<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostresTable extends Migration
{
    public function up()
    {
        Schema::create('postres', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->string('nombre')->nullable()->comment('Nombre del postre');
            $table->integer('precio')->nullable()->comment('precio del postre');
            $table->string('imagen')->nullable()->comment('imagen del postre');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postres');
    }
}
