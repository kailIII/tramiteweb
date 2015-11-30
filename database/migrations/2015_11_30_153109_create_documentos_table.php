<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_documento_id')->unsigned();
            $table->integer('oficina_id')->unsigned();
            $table->integer('remitente_id')->unsigned();
            $table->integer('numero');
            $table->string('asunto');
            $table->date('fecha');
            $table->enum('estado_documento',['Sin derivar','Derivado']);
            $table->string('anexos');
            $table->string('nombre_archivos');
            $table->integer('eliminado');
            $table->string('cod_web');
            $table->timestamps();

            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos');
            $table->foreign('oficina_id')->references('id')->on('oficinas');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documentos');
    }
}
