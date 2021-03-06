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
        Schema::create('nits', function (Blueprint $table) {
            $table->id();

            $table->string('nro_nit');
            $table->string('razon_social');
            $table->string('domicilio_fiscal');
            $table->string('tipo_nit');
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
        Schema::dropIfExists('nits');
    }
};
