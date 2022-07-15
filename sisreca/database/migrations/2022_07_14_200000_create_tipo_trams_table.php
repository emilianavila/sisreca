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
        Schema::create('tipo_trams', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            
            $table->unsignedBigInteger('unidad_orgs_id');
            $table->foreign('unidad_orgs_id')->references('id')->on('unidad_orgs')->onDelete('cascade');
        
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
        Schema::dropIfExists('tipo_trams');
    }
};
