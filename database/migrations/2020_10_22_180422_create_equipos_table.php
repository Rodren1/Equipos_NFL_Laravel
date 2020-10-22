<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->string('ciudad', 60);
            $table->string('estadio', 60);
            $table->string('conferencia', 60);
            $table->string('division', 20);
            $table->string('campeonatosConferencia', 1024);
            $table->string('campeonatosDivision', 1024);
            $table->string('superBowls', 1024);
            $table->text('historia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
