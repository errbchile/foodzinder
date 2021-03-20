<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToRestaurantsTable extends Migration
{
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->tinyInteger('tiene_whatsapp')->after('google_maps')->default(0)->comment('cero no tiene. 1 si tiene');
        });
        Schema::table('restaurants', function (Blueprint $table) {
            $table->text('horario')->after('tiene_whatsapp')->nullable();
        });
    }

    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropColumn('tiene_whatsapp');
        });
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropColumn('horario');
        });
    }
}
