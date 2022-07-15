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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->string('ci');
            $table->string('nombres');
            $table->string('paterno');
            $table->string('materno');
            $table->enum('sexo',[1,2,3])->default(1);
            $table->string('domicilio');
                        
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
        Schema::dropIfExists('personas');
    }
};
