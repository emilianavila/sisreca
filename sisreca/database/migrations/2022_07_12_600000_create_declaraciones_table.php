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
        Schema::create('declaraciones', function (Blueprint $table) {
            $table->id();

            $table->string('periodo');
            $table->string('folio');
            $table->string('tipo_transmi');
            $table->date('fecha_transmi');
            $table->enum('refrendado',[1,2])->default(1);
            
            $table->unsignedBigInteger('formularios_id');
            $table->foreign('formularios_id')->references('id')->on('formularios')->onDelete('cascade');//se agrega restricción de llave foránea
            $table->unsignedBigInteger('bien_inmuebles_id');
            $table->foreign('bien_inmuebles_id')->references('id')->on('bien_inmuebles')->onDelete('cascade');
            $table->unsignedBigInteger('otros_bienes_id');
            $table->foreign('otros_bienes_id')->references('id')->on('otros_bienes')->onDelete('cascade');

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
        Schema::dropIfExists('declaraciones');
    }
};
