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
        Schema::create('tb_tickets', function (Blueprint $table) {
            $table->bigIncrements('idtic');
            $table->date('fecha');
            $table->String('clasificacion');
            $table->String('detalles');
            $table->string('status');
            $table->string('comentarios')->nullable();
            $table->unsignedBigInteger('autorj_id');
            $table->unsignedBigInteger('Depa_id');
            $table->timestamps();
            $table->foreign('autorj_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Depa_id')->references('idDepa')->on('tb__departamentos')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tickets');
    }
};
