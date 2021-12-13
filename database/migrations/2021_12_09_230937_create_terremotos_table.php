<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerremotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terremotos', function (Blueprint $table) {
            $table->id();
            $table->integer('OBJECTID')->unsigned();
            $table->dateTime('DateTime')->nullable();
            $table->float('ErrTime')->nullable();
            $table->float('RMS')->nullable();
            $table->float('Latitude')->nullable();
            $table->float('Longitude')->nullable();
            $table->float('Depth')->nullable();
            $table->float('Magnitud')->where('Magnitud', '>=', 4)->nullable();
            $table->bigInteger('localidad_id')->where('localidad_id')-> rand(1, 143)->nullable();
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
        Schema::dropIfExists('terremotos');
    }
}
