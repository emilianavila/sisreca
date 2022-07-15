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
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('nro_tram');
            $table->string('descrip');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            
            $table->unsignedBigInteger('tipo_trams_id');
            $table->foreign('tipo_trams_id')->references('id')->on('tipo_trams')->onDelete('cascade');
            $table->unsignedBigInteger('contribuyentes_id');
            $table->foreign('contribuyentes_id')->references('id')->on('contribuyentes')->onDelete('cascade');
            $table->unsignedBigInteger('declaraciones_id');
            $table->foreign('declaraciones_id')->references('id')->on('declaraciones')->onDelete('cascade');            
            $table->unsignedBigInteger('solicitud_servis_id');
            $table->foreign('solicitud_servis_id')->references('id')->on('solicitud_servis')->onDelete('cascade');
            $table->unsignedBigInteger('adjuntos_id');
            $table->foreign('adjuntos_id')->references('id')->on('adjuntos')->onDelete('cascade');
            $table->unsignedBigInteger('refrendos_id');
            $table->foreign('refrendos_id')->references('id')->on('refrendos')->onDelete('cascade');

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
        Schema::dropIfExists('tramites');
    }
};
