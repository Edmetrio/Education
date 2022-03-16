<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pessoa_id')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('passaporte')->nullable();
            $table->string('certificado')->nullable();
            $table->string('comprovativo')->nullable();
            $table->string('outros')->nullable();
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
        Schema::dropIfExists('anexos');
    }
}
