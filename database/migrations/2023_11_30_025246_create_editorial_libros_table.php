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
        Schema::create('editorial_libros', function (Blueprint $table) {
            $table->string('cod_libro', 8);
            $table->string('cod_editorial', 8);
            $table->primary(['cod_libro', 'cod_editorial']);
            $table->foreign('cod_libro')->references('cod_libro')->on('libros');
            $table->foreign('cod_editorial')->references('cod_editorial')->on('editorial');
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
        Schema::dropIfExists('editorial_libros');
    }
};
