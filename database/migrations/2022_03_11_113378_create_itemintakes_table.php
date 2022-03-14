<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemintakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemintake', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('inscricao_id')->nullable();
            $table->foreign('inscricao_id')->references('id')->on('inscricao')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('intake_id')->nullable();
            $table->foreign('intake_id')->references('id')->on('intake')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('superior_id')->nullable();
            $table->foreign('superior_id')->references('id')->on('superior')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('itemintake');
    }
}
