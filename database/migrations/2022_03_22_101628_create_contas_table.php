<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('movimento_id')->nullable();
            $table->foreign('movimento_id')->references('id')->on('movimento')->onDelete('cascade')->onUpdate('cascade');
            $table->string('descricao')->nullable();
            $table->decimal('saldo', 20, 2)->nullable();
            $table->decimal('valor', 20,2)->nullable();
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
        Schema::dropIfExists('conta');
    }
}
