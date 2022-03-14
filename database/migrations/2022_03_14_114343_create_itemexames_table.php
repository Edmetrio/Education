<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemexamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemexame', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('exame_id')->nullable();
            $table->foreign('exame_id')->references('id')->on('exame')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('academica_id')->nullable();
            $table->foreign('academica_id')->references('id')->on('academica')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('nota', 20,2)->nullable();
            $table->string('data')->nullable();
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
        Schema::dropIfExists('itemexame');
    }
}
