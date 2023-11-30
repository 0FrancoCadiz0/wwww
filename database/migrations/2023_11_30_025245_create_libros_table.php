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
        Schema::create('libros', function (Blueprint $table) {
            $table->string('cod_libro',8)->primary();
            $table->string('cod_clasificacion');
            $table->string('nombre');
            $table->string('precio');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('ISBN');
            $table->string('edicion',3);
            $table->string('stock');
            $table->foreign('cod_clasificacion')->references('cod_clasificacion')->on('clasificacion');
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
        Schema::dropIfExists('libros');
    }
};
