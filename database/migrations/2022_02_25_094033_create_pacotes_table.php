<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacote', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('servico_id')->nullable();
            $table->foreign('servico_id')->references('id')->on('servico')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome');
            $table->decimal('valor', 20,2);
            $table->string('estado')->default('on');
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
        Schema::dropIfExists('pacote');
    }
}
