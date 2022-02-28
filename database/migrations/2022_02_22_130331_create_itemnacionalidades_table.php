<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemnacionalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemnacionalidade', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pessoa_id')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('nacionalidade_id')->nullable();
            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidade')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('itemnacionalidade');
    }
}
