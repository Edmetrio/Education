<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academica', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pessoa_id')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('escola')->nullable();
            $table->string('termino')->nullable();
            $table->string('certificado')->nullable();
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
        Schema::dropIfExists('academica');
    }
}
