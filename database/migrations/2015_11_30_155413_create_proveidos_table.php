<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('documento_id');
            $table->integer('oficina_id');
            $table->integer('tipo_documento_id');
            $table->integer('remitente_id');
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
        Schema::drop('proveidos');
    }
}
