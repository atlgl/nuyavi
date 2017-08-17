<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtesanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artesanos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',20);
            $table->string('apellidopaterno',20);
            $table->string('apellidomaterno',20);
            $table->string('telefono',15);
            $table->string('ciudad',20);
            $table->string('municipio',20);
            $table->string('calle',20);
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
        Schema::dropIfExists('artesanos');
    }
}
