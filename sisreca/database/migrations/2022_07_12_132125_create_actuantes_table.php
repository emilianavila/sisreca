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
        Schema::create('actuantes', function (Blueprint $table) {
            $table->id();
            
            $table->integer('participacion');
            $table->string('tipo_actuante');
            
            $table->unsignedBigInteger('contribuyentes_id');
            $table->foreign('contribuyentes_id')->references('id')->on('contribuyentes')->onDelete('cascade');
            $table->unsignedBigInteger('declaraciones_id');
            $table->foreign('declaraciones_id')->references('id')->on('declaraciones')->onDelete('cascade');
            
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
        Schema::dropIfExists('actuantes');
    }
};
