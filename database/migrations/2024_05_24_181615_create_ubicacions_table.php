<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string('vereda');
            $table->string('nombre_finca');
            $table->decimal('latitude', 20, 15);
            $table->decimal('longitude', 20, 15);
            $table->integer('hectareas');
            $table->string('tipo_finca', 30); 
            $table->foreignId('asociado_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('ubicacions');
    }
}
