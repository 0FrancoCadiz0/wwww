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
        Schema::create('pedido', function (Blueprint $table) {
            $table->string('cod_pedido', 8)->primary();
            $table->string('costo_envio');
            $table->date('fecha');
            $table->string('total');
            $table->string('cod_boleta',8);
            $table->string('cod_pago',8);
            $table->string('cod_envio',8);
            $table->foreign('cod_boleta')->references('cod_boleta')->on('boleta');
            $table->foreign('cod_pago')->references('cod_pago')->on('pago');
            $table->foreign('cod_envio')->references('cod_envio')->on('envio');
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
        Schema::dropIfExists('pedido');
    }
};
