<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemcurtirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcurtir', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('comentario_id')->nullable();
            $table->foreign('comentario_id')->references('id')->on('comentario')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('poost_id')->nullable();
            $table->foreign('poost_id')->references('id')->on('poost')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('curtir_id')->nullable();
            $table->foreign('curtir_id')->references('id')->on('curtir')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('itemcurtir');
    }
}
