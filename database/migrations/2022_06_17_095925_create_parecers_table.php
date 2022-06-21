<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParecersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('parecers', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->unsignedBigInteger('despacho_id');
            $table->foreign('despacho_id')->references('id')->on('despachos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('processo_id');
            $table->foreign('processo_id')->references('id')->on('processos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('descricao', 100);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('parecers');
    }

}
