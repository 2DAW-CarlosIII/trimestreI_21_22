<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPropietariosToConstruccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('construcciones', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();

            $table->foreign('propietario')->references('id')->on('propietarios');
            Schema::disableForeignKeyConstraints();
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
            //
        });
    }
}
