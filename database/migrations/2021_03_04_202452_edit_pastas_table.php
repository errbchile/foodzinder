<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditPastasTable extends Migration
{
    public function up()
    {
        Schema::table('pastas', function (Blueprint $table) {
            $table->string('status')->after('imagen')->default(1)->comments('1 aparecera en el buscador. 2 no.');
        });
    }

    public function down()
    {
        Schema::table('pastas', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
