<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuotasTable extends Migration
{
    public function up()
    {
        Schema::create('cuotas', function (Blueprint $table) {
            $table->id();
            $table->string('mes');
            $table->string('estado_pago', 20)->default('pendiente');
            $table->decimal('total', 8, 2)->default(0); // Asegúrate de incluir este campo
            $table->timestamps();
            $table->boolean('vencido')->default(false);
            $table->timestamp('fecha_modificacion')->nullable();
            $table->foreignId('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuotas');
    }
}