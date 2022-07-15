<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_tiene_casillas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('formularios_id');
            $table->foreign('formularios_id')->references('id')->on('formularios')->onDelete('cascade');
            $table->unsignedBigInteger('casilla_impuestos_id');
            $table->foreign('casilla_impuestos_id')->references('id')->on('casilla_impuestos')->onDelete('cascade');

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
        Schema::dropIfExists('formulario_tiene_casillas');
    }
};
