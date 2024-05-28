<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociados', function (Blueprint $table) {
            $table->id();   
            $table->string('nombre_completo', 40);
            $table->string('genero', 10);
            $table->integer('documento');
            $table->integer('celular'); 
            $table->string('estado_civil', 15);
            $table->date('fecha_nacimiento');
            $table->text('nucleo_familiar');
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
        Schema::dropIfExists('asociados');
    }
}
