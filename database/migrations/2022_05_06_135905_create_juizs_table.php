<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuizsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('juizs', function (Blueprint $table) {
            $table->id();
            $table->string('pesidente', 5);
            $table->unsignedBigInteger('pessoa_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('seccao_id');
            $table->foreign('seccao_id')->references('id')->on('seccaos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('subseccao_id')->nullable();
            $table->foreign('subseccao_id')->references('id')->on('sub_seccaos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('descricao', 100);
            $table->date('data_inicial')->format('dd/mm/yyyy');
            $table->date('data_final')->format('dd/mm/yyyy');
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
        Schema::dropIfExists('juizs');
    }

}
