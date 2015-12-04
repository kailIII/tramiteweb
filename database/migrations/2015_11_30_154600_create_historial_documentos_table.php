<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('documento_id')->unsigned();
            $table->integer('oficina_origen_id')->unsigned();
            $table->dateTime('fecha_emision');
            $table->integer('oficina_destino_id')->unsigned();
            $table->dateTime('fecha_recepcion');
            $table->string('proveido');
            $table->enum('estado',['Sin recibir','Recibido']);
            $table->integer('eliminado');
            $table->timestamps();

            /*$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('documento_id')->references('id')->on('documentos');
            $table->foreign('oficina_origen_id')->references('id')->on('oficinas');
            $table->foreign('oficina_destino_id')->references('id')->on('oficinas');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('historial_documentos');
    }
}
