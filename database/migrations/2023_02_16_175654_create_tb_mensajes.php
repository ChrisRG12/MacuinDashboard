<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mensajes', function (Blueprint $table) {
            $table->bigIncrements('idsms');
            $table->String('descripcion');;
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('desitinado_id');
            $table->timestamps();
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('desitinado_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mensajes');
    }
};
