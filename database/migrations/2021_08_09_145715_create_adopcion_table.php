<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopcion', function (Blueprint $table) {
            $table->foreignId('id_clientes')->references('id')->on('clientes');
            $table->foreignId('id_animales')->references('id')->on('animales');
            $table->date('fecha_adopcion');
            $table->date('fecha_devolucion');
            $table->text('observaciones');
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
        Schema::dropIfExists('adopcion');
    }
}
