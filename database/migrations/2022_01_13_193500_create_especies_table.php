<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspeciesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('especies', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('seccao_id');
            $table->foreign('seccao_id')->references('id')->on('seccaos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('subseccao_id');
            $table->foreign('subseccao_id')->references('id')->on('sub_seccaos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('descricao')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('especies');
    }

}
