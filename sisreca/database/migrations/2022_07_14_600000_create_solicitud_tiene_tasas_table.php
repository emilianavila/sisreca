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
        Schema::create('solicitud_tiene_tasas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('solicitud_servis_id');
            $table->foreign('solicitud_servis_id')->references('id')->on('solicitud_servis')->onDelete('cascade');
            $table->unsignedBigInteger('tasas_otros_id');
            $table->foreign('tasas_otros_id')->references('id')->on('tasas_otros')->onDelete('cascade');

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
        Schema::dropIfExists('solicitud_tiene_tasas');
    }
};
