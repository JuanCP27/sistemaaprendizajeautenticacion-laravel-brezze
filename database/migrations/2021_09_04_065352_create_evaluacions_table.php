<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('id_contenido');
            $table->unsignedBigInteger('id_estudiante');
            $table->unsignedBigInteger('id_profesor');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_final');
            $table->boolean('estado')->default(false);
            $table->foreign('id_contenido')->references('id')->on('contenidos');
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
        Schema::dropIfExists('evaluacions');
    }
}
