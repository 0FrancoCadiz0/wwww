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
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->string('cod_pedido', 8);
            $table->string('cod_libro',8);
            $table->string('cantidad',3);
            $table->string('precio');
            $table->string('subtotal');
            $table->primary(['cod_libro', 'cod_pedido']);
            $table->foreign('cod_pedido')->references('cod_pedido')->on('pedido');
            $table->foreign('cod_libro')->references('cod_libro')->on('libros');
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
        Schema::dropIfExists('detalle_pedido');
    }
};
