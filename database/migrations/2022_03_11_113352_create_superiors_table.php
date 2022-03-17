<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperiorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superior', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('pessoa_id')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('grau_id')->nullable();
            $table->foreign('grau_id')->references('id')->on('grau')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('pacote_id')->nullable();
            $table->foreign('pacote_id')->references('id')->on('pacote')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('moeda_id')->nullable();
            $table->foreign('moeda_id')->references('id')->on('moeda')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('intake_id')->nullable();
            $table->foreign('intake_id')->references('id')->on('intake')->onDelete('cascade')->onUpdate('cascade');
            $table->string('curso')->nullable();
            $table->decimal('orcamento', 20,2 )->nullable();
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
        Schema::dropIfExists('superior');
    }
}
