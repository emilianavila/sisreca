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
        Schema::create('refrendos', function (Blueprint $table) {
            $table->id();
                        
            $table->integer('cant_timbres');
            $table->integer('cant_stickers');
            $table->date('fecha_refrendo');
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
        Schema::dropIfExists('refrendos');
    }
};
