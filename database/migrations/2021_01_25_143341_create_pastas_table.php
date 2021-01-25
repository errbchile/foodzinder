<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastasTable extends Migration
{
    public function up()
    {
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->string('nombre')->nullable()->comment('Nombre de la pasta');
            $table->integer('precio')->nullable()->comment('precio de la pasta');
            $table->string('imagen')->nullable()->comment('imagen de la pasta');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pastas');
    }
}
