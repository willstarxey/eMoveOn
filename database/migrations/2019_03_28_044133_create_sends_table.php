<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreDest');
            $table->string('remitente');
            $table->string('destino');
            $table->double('peso');
            $table->string('dimensiones');
            $table->double('costo')->nullable();
            $table->boolean('estado')->default(false);
            $table->unsignedInteger('repartidor_id')->nullable();
            $table->foreign('repartidor_id')->references('in')->on('users');
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
        Schema::dropIfExists('sends');
    }
}
