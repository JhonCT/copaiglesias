<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inscripcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('dni');
            $table->string('correo');
            $table->string('celular');
            $table->string('iglesia');
            $table->string('disciplina');
            $table->string('canti_disci');
            $table->string('cantidad');
            $table->string('archivo');
            $table->string('costo');
            $table->string('voucher');
            $table->string('operacion');
            $table->string('fecha');
            $table->string('estado');
            $table->rememberToken();
            $table->timestamps();
        }); 
    }
    
     /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion');

    }
}
