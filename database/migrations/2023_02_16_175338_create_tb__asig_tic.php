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
        Schema::create('tb__asig_tic', function (Blueprint $table) {
            $table->bigIncrements('idasig');
            $table->String('observacion');;
            $table->unsignedBigInteger('autora_id');
            $table->unsignedBigInteger('tick_id');
            $table->timestamps();
            $table->foreign('autora_id')->references('idusuario')->on('tb_usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tick_id')->references('idtic')->on('tb_tickets')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb__asig_tic');
    }
};
