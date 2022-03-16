<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItempaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itempais', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('pais')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('academica_id')->nullable();
            $table->foreign('academica_id')->references('id')->on('academica')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('superior_id')->nullable();
            $table->foreign('superior_id')->references('id')->on('superior')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('itempais');
    }
}
