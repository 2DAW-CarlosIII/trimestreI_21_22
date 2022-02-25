<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClaveajenaToConstruccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('construcciones', function (Blueprint $table) {
            $table->foreign('propietario')->references('id')->on('propietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('construcciones', function (Blueprint $table) {
            $table->dropColumn('user_dni');
        });
    }
}
