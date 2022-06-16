<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSeccaosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sub_seccaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60);
            $table->unsignedBigInteger('seccao_id');
            $table->foreign('seccao_id')->references('id')->on('seccaos')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('presidente_subsec_id'); //PRESIDENTE DA SECCAO
            $table->foreign('presidente_subsec_id')->references('id')->on('juiz')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('descricao', 100)->nullable();
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
        Schema::dropIfExists('sub_seccaos');
    }

}
