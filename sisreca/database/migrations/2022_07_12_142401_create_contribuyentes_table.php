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
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_contrib');
            
            $table->unsignedBigInteger('personas_id');
            $table->foreign('personas_id')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('nits_id');
            $table->foreign('nits_id')->references('id')->on('nits')->onDelete('cascade');

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
        Schema::dropIfExists('contribuyentes');
    }
};
