<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPropietarioFKTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('construcciones', function (Blueprint $table) {
            $table->unsignedBigInteger('propietarios');
            $table->foreign('propietarios')->references('id')->on('propietarios');
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
            Schema::dropColumns('propietarios');
        });
    }
}
