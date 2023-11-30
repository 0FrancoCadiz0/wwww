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
        Schema::create('genero_libros', function (Blueprint $table) {
            $table->string('cod_libro', 8);
            $table->string('cod_genero', 8);
            $table->primary(['cod_libro', 'cod_genero']);
            $table->foreign('cod_libro')->references('cod_libro')->on('libros');
            $table->foreign('cod_genero')->references('cod_genero')->on('genero');
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
        Schema::dropIfExists('genero_libros');
    }
};
