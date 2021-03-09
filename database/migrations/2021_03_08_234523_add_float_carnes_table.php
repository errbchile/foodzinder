<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFloatCarnesTable extends Migration
{
    public function up()
    {
        Schema::table('carnes', function (Blueprint $table) {
            $table->dropColumn('precio');
            
        });
        Schema::table('carnes', function (Blueprint $table) {
            $table->float('precio', 8, 2)->nullable()->after('nombre');
            
        });
    }

    public function down()
    {
        Schema::table('carnes', function (Blueprint $table) {
            $table->dropColumn('precio');
        });
        Schema::table('carnes', function (Blueprint $table) {
            $table->integer('precio')->nullable()->comment('precio del plato entrante');
        });
    }
}
