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
        Schema::create('otros_bienes', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre_bien');
            $table->string('tipo_bien');
            $table->string('tipo_casco');
            $table->float('eslora',8,2);
            $table->string('mat_const');
            $table->integer('potencia_mot');
            $table->string('matricula');
            $table->string('marca');
            $table->string('modelo');
            $table->year('anio');
            $table->string('tipo_veh');
            $table->integer('cilindrada');
            $table->string('procedencia');
            $table->string('nro_placa');
            $table->string('otro_bien');
            $table->string('observacion');
            
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
        Schema::dropIfExists('otros_bienes');
    }
};
