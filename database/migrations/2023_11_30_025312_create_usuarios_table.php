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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nom_cliente', 50);
            $table->string('apellido_cliente',50);
            $table->string('rut',12)->unique();
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('fono',15)->unique();
            $table->string('imagen');
            $table->string('postal', 20);
            $table->string('region');
            $table->string('comuna');
            $table->string('ciudad');
            $table->string('direccion');
            $table->timestamps();
            $table->string('cod_pedido', 8)->unique();
            $table->unsignedBigInteger('id_tipoCuenta');
            $table->foreign('id_tipoCuenta')->references('id')->on('roles');
            $table->foreign('cod_pedido')->references('cod_pedido')->on('pedido');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
