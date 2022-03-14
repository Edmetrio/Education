<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemidiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemidioma', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('idioma_id')->nullable();
            $table->foreign('idioma_id')->references('id')->on('idioma')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('academica_id')->nullable();
            $table->foreign('academica_id')->references('id')->on('academica')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('itemidioma');
    }
}
