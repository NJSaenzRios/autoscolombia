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
        //
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string("Placa");
            $table->string("Color");
            $table->string("Marca");            
            $table->string("Foto");
            $table->string('Descripcion');
            $table->string('Propietario');
            $table->string('Celular');
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
        //
    }
};
