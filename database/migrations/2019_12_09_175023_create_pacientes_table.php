<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id_Paciente');
            $table->string('Nome');
            $table->string('Endereço');
            $table->integer('Numero');
            $table->string('Bairro');
            $table->string('Telefone');
            $table->boolean('Sexo');
            $table->boolean('NomeMae');
            $table->boolean('SUS');  
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
        Schema::dropIfExists('pacientes');
    }
}
