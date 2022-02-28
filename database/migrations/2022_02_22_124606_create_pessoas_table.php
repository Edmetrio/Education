<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->uuid('id')->primary();
/*             $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users'); */
            $table->uuid('sexo_id')->nullable();
            $table->foreign('sexo_id')->references('id')->on('sexo')->onDelete('cascade');
            $table->string('nome')->nullable();
            $table->string('telefone')->nullable();
            $table->string('nascimento');
            $table->string('passaporte');
            $table->string('email')->unique();
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
        Schema::dropIfExists('pessoa');
    }
}
