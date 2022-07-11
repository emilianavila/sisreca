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
        Schema::create('bien_inmuebles', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_bien');
            $table->string('tipo_bien');
            $table->string('area');
            $table->string('tipo_mueble');
            $table->string('cod_catastral');
            $table->string('departamento');
            $table->string('alcaldia');
            $table->string('cod_alcaldia');
            $table->string('direccion');
            $table->string('mat_folio');
            $table->float('sup_total',8,2); //metros cuadrados
                        
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
        Schema::dropIfExists('bien_inmuebles');
    }
};
