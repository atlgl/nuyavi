<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',20);
            $table->string('apellidopaterno',20);
            $table->string('apellidomaterno',20);
            $table->string('telefono',15);
            $table->string('colonia',20);
            $table->string('pais',20);
            $table->string('estado',20);
            $table->string('ciudad',20);
            $table->string('municipio',20);
            $table->string('calle',20);
            $table->string('numero',20);
            $table->string('codigopostal',20);
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
        Schema::dropIfExists('personas');
    }
}
