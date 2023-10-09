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
            $table->string('rut',12);
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('fono',15);
            $table->mediumInteger('cod_direccion')->unique();
            $table->string('cod_pedido',15);
            $table->timestamps();
            $table->unsignedBigInteger('id_tipoCuenta');
            $table->foreign('id_tipoCuenta')->references('id')->on('roles');
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
