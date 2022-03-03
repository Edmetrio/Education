<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcurso', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('inscricao_id')->nullable();
            $table->foreign('inscricao_id')->references('id')->on('inscricao')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('curso_id')->nullable();
            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade')->onUpdate('cascade');
            $table->string('estado')->default('on')->nullable();
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
        Schema::dropIfExists('itemcurso');
    }
}
