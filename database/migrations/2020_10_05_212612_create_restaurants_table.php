<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();

            $table->string('nombre')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('pais')->nullable();
            $table->string('telefono')->nullable();
            $table->string('precio1')->nullable();
            $table->string('precio2')->nullable();
            $table->string('precio3')->nullable();
            $table->string('restaurante')->nullable();
            $table->string('cafeteria')->nullable();
            $table->string('bar')->nullable();
            $table->string('admite_reservas')->nullable();
            $table->string('para_llevar')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('terraza_exterior')->nullable();
            $table->string('wifi_gratuito')->nullable();
            $table->string('sin_gluten')->nullable();
            $table->string('accesible')->nullable();
            $table->string('admite_mascotas')->nullable();
            $table->string('plastic_free')->nullable();
            $table->string('desayuno')->nullable();
            $table->string('brunch')->nullable();
            $table->string('almuerzo')->nullable();
            $table->string('cena')->nullable();
            $table->string('dulce')->nullable();
            $table->string('salado')->nullable();
            $table->string('local')->nullable();
            $table->string('nacional')->nullable();
            $table->string('internacional')->nullable();
            $table->string('fusion')->nullable();
            $table->string('vegetariano')->nullable();
            $table->string('vegano')->nullable();
            $table->string('marisco')->nullable();
            $table->string('atun')->nullable();
            $table->string('sushi')->nullable();
            $table->string('pescado')->nullable();
            $table->string('carne')->nullable();
            $table->string('paella')->nullable();
            $table->string('pasta')->nullable();
            $table->string('pizza')->nullable();
            $table->string('zumos_y_batidos')->nullable();
            $table->string('imagenes')->nullable();

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
        Schema::dropIfExists('restaurants');
    }
}
