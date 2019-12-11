<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExameDetalhadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame_detalhados', function (Blueprint $table) {
            $table->bigIncrements('id_ExDetalhado');
            $table->unsignedbigInteger('id_Exame');
            $table->foreign('id_Exame')->references('id_Exame')->on('Exames');
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
        Schema::dropIfExists('exame_detalhados');
    }
}
