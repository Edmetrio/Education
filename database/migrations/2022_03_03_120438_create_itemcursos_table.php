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
            $table->uuid('servico_id')->nullable();
            $table->foreign('servico_id')->references('id')->on('servico')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('curso_id')->nullable();
            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('grau_id')->nullable();    
            $table->foreign('grau_id')->references('id')->on('grau')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('entidade_id')->nullable();
            $table->foreign('entidade_id')->references('id')->on('entidade')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('moeda_id')->nullable();
            $table->foreign('moeda_id')->references('id')->on('moeda')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('propina', 20,2)->nullable();
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
